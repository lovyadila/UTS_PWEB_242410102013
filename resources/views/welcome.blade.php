@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h2 class="fw-bold mb-3" style="color:#5a3d2b;">Dashboard</h2>
    <p class="mb-4" style="color:#6d4c41;">
        Selamat datang di <strong>Sistem Penyimpanan Buku</strong>.<br>
        Silakan isi data di bawah ini untuk menampilkan profil Anda.
    </p>

    <form action="{{ route('profile') }}" method="POST"
          style="max-width: 420px; margin: 0 auto; background-color: #fffaf3;
                 padding: 30px; border-radius: 18px; box-shadow: 0 4px 10px rgba(0,0,0,0.08); border: 1px solid #e0c9a6;">
        @csrf

        <div class="mb-3 text-start">
            <label class="form-label fw-bold" style="color:#5a3d2b;">Nama:</label>
            <input type="text" name="nama" class="form-control"
                   placeholder="Masukkan nama Anda" required
                   style="border-radius:10px; border:1px solid #d7bfa3;">
        </div>

        <div class="mb-3 text-start">
            <label class="form-label fw-bold" style="color:#5a3d2b;">NIM:</label>
            <input type="text" name="nim" class="form-control"
                   placeholder="Masukkan NIM Anda" required
                   style="border-radius:10px; border:1px solid #d7bfa3;">
        </div>

        <div class="mb-4 text-start">
            <label class="form-label fw-bold" style="color:#5a3d2b;">Email:</label>
            <input type="email" name="email" class="form-control"
                   placeholder="Masukkan email Anda" required
                   style="border-radius:10px; border:1px solid #d7bfa3;">
        </div>

        <button type="submit" class="btn w-100"
                style="background-color:#b57f50; color:white; border:none;
                       border-radius:10px; padding:10px 0; font-weight:600;">
            Login
        </button>

        <p class="mt-4 mb-0" style="color:#5a3d2b; font-size:15px;">
            <em>Setelah login, data Anda akan muncul di halaman profil.</em>
        </p>
    </form>
</div>
@endsection
