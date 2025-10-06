<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Menampilkan semua pesan dalam bentuk tabel
    public function index()
    {
        $messages = Message::latest()->paginate(10); // Ambil semua pesan, urutkan dari yg terbaru
        return view('messages.index', ['messages' => $messages]);
    }

    // Menyimpan pesan baru dari form kontak
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validatedData);

        return redirect('/#kontak')->with('success', 'Pesan Anda telah berhasil dikirim!');
    }

    // Menampilkan form untuk mengedit pesan
    public function edit(Message $message)
    {
        return view('messages.edit', ['message' => $message]);
    }

    // Meng-update pesan di database
    public function update(Request $request, Message $message)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message->update($validatedData);

        return redirect()->route('messages.index')->with('success', 'Pesan berhasil diperbarui!');
    }

    // Menghapus pesan
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
