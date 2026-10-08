@extends('layouts.app')

@section('title', $title)

@section('content')
    <<a href="{{ route('books.index') }}">Daftar buku</a>
    
    <ul>
        <li>Judul: {{ $book->title }}</li>
        <li>Penulis: {{ $book->author }}</li>
        <li>Tahun: {{ $book->year }}</li>
        <li>Stok: {{ $book->stock }}</li>
    </ul>
    <a href="{{ route('books.edit', $book->id) }}">Edit Buku</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus Buku</button>

    </form>
@endsection