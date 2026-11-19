@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Selamat datang di Sistem Informasi Perpustakaan</h2>
    <ul>
        <li>Jumlah Buku: {{ $data['total_books'] }}</li>
        <li>Jumlah Kategori: {{ $data['total_categories'] }}</li>
        <li>Jumlah Anggota: {{ $data['total_members'] }}</li>
        <li>Total Transaksi Peminjaman: {{ $data['total_borrowings'] }}</li>
        <li>Peminjaman Aktif (Belum Kembali): {{ $data['active_borrowings'] }}</li>
    </ul>
@endsection