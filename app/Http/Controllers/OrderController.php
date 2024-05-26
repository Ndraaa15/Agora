<?php

namespace App\Http\Controllers;


use App\Mail\MailTicket;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Ticket;
use App\ThirdParty\PdfLib;
use Illuminate\Http\Request;
use App\Models\TicketSection;
use App\Status;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\ThirdParty\MidtransLib;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($ticket_section_id)
    {
        try{
            $ticketSection = TicketSection::find($ticket_section_id)->load('event');
            $event = $ticketSection->event;
            return view('web.checkout', compact('ticketSection', 'event'));
        } catch(Exception $e){
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function checkout(Request $request)
    {
        try {
            DB::beginTransaction();
            $midtrans = new MidtransLib();
            $pdf = new PdfLib();
            $request->validate([
                'ticket_section_id' => 'required|exists:ticket_sections,id',
                'quantity' => 'required|integer|min:1',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:255',
            ]);

            $ticketSection = TicketSection::find($request->ticket_section_id);
            if ($ticketSection->quantity < $request->quantity){
                throw new Exception('Ticket Of Event is not enough');
            }

            $totalPriceEvent = $ticketSection->price * $request->quantity;
            $tax = $request->quantity * 4000;

            $order = Order::create([
                'user_id' => Auth::id(),
                'ticket_section_id' => $request->ticket_section_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'status' => Status::PENDING,
                'quantity' => $request->quantity,
                'tax' => $tax,
                'total_price' => $totalPriceEvent + $tax
            ]);

            $url = $midtrans->chargeSnap($order, Auth::user());

            Payment::create([
                'user_id' => Auth::id(),
                'order_id' => $order->id,
                'payment_method' => 'ONLINE',
                'status' => Status::PENDING,
                'amount' => $order->total_price,
            ]);

            for($i = 0; $i < $request->quantity; $i++){
                $code = bin2hex(random_bytes(8));
                Ticket::create([
                    'user_id' => Auth::id(),
                    'order_id' => $order->id,
                    'qr_code' => 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $code,
                    'code' => $code
                ]);
            }

            $pdf->generate('pdf.ticket', Order::find($order->id)->load('tickets')->load('ticketSection'));

            $ticketSection->update([
                'quantity' => ($ticketSection->quantity - $request->quantity),
            ]);

            Mail::to(Auth::user()->email)->send(new MailTicket(Auth::user(), storage_path('tickets/ticket' . $order->id . '.pdf')));

            DB::commit();
            return redirect()->away($url);
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
