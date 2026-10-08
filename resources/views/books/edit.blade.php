@extends('layouts.app')
@section('title', $title)
@section('content')
    <h2>Edit Buku</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul:</label> <input type="text" name="title" value="{{ $book->title }}" required><br><br>
        <label>Penulis:</label> <input type="text" name="author" value="{{ $book->author }}" required><br><br>
        <label>Tahun:</label> <input type="number" name="year" value="{{ $book->year }}" required><br><br>
        <label>Stok:</label> <input type="number" name="stock" value="{{ $book->stock }}" required><br><br>
        <button type="submit">Update Buku</button>
    </form>
    <br>
    <a href="{{ route('books.index') }}">Kembali</a>
@endsection