@extends('layouts.app')
@section('title', $title)
@section('content')
    <h2>Tambah Buku</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Judul:</label> <input type="text" name="title" required placeholder="Masukkan judul buku"><br><br>
        <label>Penulis:</label> <input type="text" name="author" required placeholder="Masukkan nama penulis"><br><br>
        <label>Tahun:</label> <input type="number" name="year" required placeholder="Masukkan tahun terbit"><br><br>
        <label>Stok:</label> <input type="number" name="stock" required placeholder="Masukkan jumlah stok"><br><br>
        <button type="submit">Simpan Buku</button>
    </form>
    <br>
    <a href="{{ route('books.index') }}">Kembali</a>
@endsection