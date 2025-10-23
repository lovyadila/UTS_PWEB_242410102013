@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    @if(session('nama'))
        <div class="alert alert-success mx-auto mb-4"
             style="max-width: 450px; background-color:#f4e2c2;
                    color:#4e342e; border:none; border-radius:10px;">
            <strong>Selamat!</strong> Anda telah berhasil login.
        </div>
    @endif

    <div style="background-color: #fffaf3; border-radius: 18px; padding: 35px;
                max-width: 420px; margin: auto; box-shadow: 0 4px 10px rgba(0,0,0,0.08);
                border: 1px solid #e0c9a6;">
        <div style="width: 110px; height: 110px; border-radius: 50%;
                    background-color: #f0dac1; margin: auto;
                    border: 2px solid #b57f50;">
        </div>

        <h5 class="mt-4 fw-bold" style="color:#5a3d2b;">Profil Pengguna</h5>
        <hr style="border-top:1px solid #c7a97b; width:80%; margin:auto; margin-bottom:20px;">

        <div class="text-start" style="margin-left:30px; color:#4e342e;">
            <p><strong>Nama:</strong> {{ $nama ?? 'Belum diisi' }}</p>
            <p><strong>NIM:</strong> {{ $nim ?? 'Belum diisi' }}</p>
            <p><strong>Email:</strong> {{ $email ?? 'Belum diisi' }}</p>
        </div>
    </div>
</div>
@endsection
