@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 style="color:#6b4f4f;">Daftar Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; margin-top:20px; border-collapse:collapse;">
        <thead style="background-color:#d2b48c; color:white;">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody style="background-color:#fff8f0;">
            <tr><td>1</td><td>Filosofi Kopi</td><td>Dewi Lestari</td><td>2006</td></tr>
            <tr><td>2</td><td>Laskar Pelangi</td><td>Andrea Hirata</td><td>2005</td></tr>
            <tr><td>3</td><td>Bumi Manusia</td><td>Pramoedya Ananta Toer</td><td>1980</td></tr>
            <tr><td>4</td><td>Negeri 5 Menara</td><td>Ahmad Fuadi</td><td>2009</td></tr>
            <tr><td>5</td><td>Perahu Kertas</td><td>Dewi Lestari</td><td>2008</td></tr>
            <tr><td>6</td><td>Rindu</td><td>Tere Liye</td><td>2014</td></tr>
        </tbody>
    </table>
</div>
@endsection
