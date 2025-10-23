<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Dashboard
    public function dashboard()
    {
        return view('welcome');
    }

    // Halaman Pengelolaan Buku
    public function pengelolaan()
    {
        return view('pengelolaan');
    }

    // Halaman Profil kosong (saat pertama kali dibuka)
    public function profilePage(Request $request)
    {
        // Ambil data dari session jika ada
        $nama = session('nama');
        $nim = session('nim');
        $email = session('email');

        return view('profile', compact('nama', 'nim', 'email'));
    }

    // Proses inputan dari Dashboard
    public function profile(Request $request)
    {
        // Simpan data ke session
        session([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email
        ]);

        // Kirim ke halaman profil dengan data
        return redirect()->route('profile.page');
    }
}
