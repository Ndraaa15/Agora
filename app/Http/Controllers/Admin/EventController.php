<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class EventController extends Controller
{
    public function index()
    {
        // mengambil data dari table mahasiswa
        // $mahasiswa = DB::table('mahasiswa')->get();
        $crud = DB::table('crud')->paginate(10);

        // mengirim data mahasiswa ke view index
        return view('web.crud.index', ['crud' => $crud]);
    }

    public function create()
    {
        return view('web.crud.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'category_id' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'description' => 'required|string',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location_map' => 'required|string|max:255',
        ]);

        $imageName = time() . '.' . $request->images->extension();
        $request->images->move(public_path('images'), $imageName);

        DB::table('crud')->insert([
            'name' => $request->name,
            'organizer' => $request->organizer,
            'category_id' => $request->category_id,
            'province' => $request->province,
            'city' => $request->city,
            'description' => $request->description,
            'images' => $imageName,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'date' => $request->date,
            'time' => $request->time,
            'location_map' => $request->location_map,
        ]);


        return redirect()->route('crud.index')->with('success', 'Event created successfully.');
    }
    public function edit($id)
    {
        // Retrieve the record based on the given ID
        $crud = DB::table('crud')->where('id', $id)->first();

        // Check if the record exists
        if (!$crud) {
            return redirect()->route('crud.index')->with('error', 'Record not found');
        }

        // Send the retrieved data to the edit view
        return view('web.crud.edit', ['crud' => $crud]);
    }

    public function editsave(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'category_id' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'description' => 'required|string',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location_map' => 'required|string|max:255',
        ]);

        $imageName = time() . '.' . $request->images->extension();
        $request->images->move(public_path('images'), $imageName);

        DB::table('crud')->where('id', $request->id)->update([
            'name' => $request->name,
            'organizer' => $request->organizer,
            'category_id' => $request->category_id,
            'province' => $request->province,
            'city' => $request->city,
            'description' => $request->description,
            'images' => $imageName,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'date' => $request->date,
            'time' => $request->time,
            'location_map' => $request->location_map,
        ]);


        return redirect()->route('crud.index')->with('success', 'Event created successfully.');
    }



    public function delete($id)
    {
        // Mulai transaksi
        DB::beginTransaction();

        try {
            // Hapus data dengan ID tertentu
            DB::table('crud')->where('id', $id)->delete();

            // Ambil semua data yang memiliki ID lebih besar dari ID yang dihapus dan kurangi ID mereka dengan 1
            $rows = DB::table('crud')->where('id', '>', $id)->orderBy('id')->get();

            foreach ($rows as $row) {
                DB::table('crud')->where('id', $row->id)->update(['id' => $row->id - 1]);
            }

            // Commit transaksi
            DB::commit();

            return redirect()->route('crud.index')->with('success', 'Event deleted and IDs adjusted successfully.');
        } catch (\Exception $e) {
            // Rollback transaksi jika ada kesalahan
            DB::rollBack();

            return redirect()->route('crud.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        // Mengambil data event berdasarkan ID
        $crud = DB::table('crud')->where('id', $id)->first();

        // Memeriksa apakah data event ditemukan
        if (!$crud) {
            return redirect()->route('crud.index')->with('status', 'not_found');
        }

        return view('web.crud.show', compact('crud'));
    }
}
