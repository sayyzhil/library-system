@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Selamat datang di Sistem Informasi Perpustakaan</h2>
    <ul>
        <li>Jumlah Buku: {{ $data['total_books'] }}</li>
        <li>Jumlah Kategori: {{ $data['total_categories'] }}</li>
        <li>Jumlah Member: {{ $data['total_members'] }}</li>
    </ul>
@endsection