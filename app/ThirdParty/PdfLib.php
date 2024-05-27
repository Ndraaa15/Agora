<?php

namespace App\ThirdParty;

use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfLib
{
    public function generate($view, $order)
    {
        $datas = [];
        $event = $order->ticketSection->event;
        foreach($order->tickets as $ticket) {
            $data = [
                'name' => $event->name,
                'price' => $order->ticketSection->price,
                'location' => $event->province,
                'code' => $ticket->code,
                'qr_code' => $ticket->qr_code
            ];
            array_push($datas, $data);
        }
        $pdf = PDF::loadView($view, ['datas' => $datas])->setOptions(['defaultFont' => 'sans-serif', 'isHtml5ParserEnabled' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true]);
        $filePath = storage_path('tickets/ticket' . $order->id . '.pdf');
        $pdf->save($filePath);
    }
}
