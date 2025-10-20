<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class DataTiketController extends Controller
{
    // TAMPIL SEMUA TIKET PENUMPANG
    public function index()
    {
        $tickets = Booking::all();
        return view('data-tiket.index', compact('tickets'));
    }

    // FORM EDIT STATUS TIKET
    public function edit($id)
    {
        $ticket = Booking::findOrFail($id);
        return view('data-tiket.edit', compact('ticket'));
    }

    // UPDATE STATUS TIKET
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Paid,Cancelled',
        ]);

        $ticket = Booking::findOrFail($id);
        $ticket->status = $request->status;
        $ticket->save();

        return redirect()->route('data-tiket.index')->with('success', 'Status tiket berhasil diperbarui!');
    }

    // HAPUS TIKET (opsional)
    public function destroy($id)
    {
        $ticket = Booking::findOrFail($id);
        $ticket->delete();

        return back()->with('success', 'Tiket berhasil dihapus!');
    }
}
