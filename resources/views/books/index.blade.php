@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    @if(count($books) > 0)
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>ID: {{ $book->id }}</strong> | 
                    <a href="/books/{{ $book->id }}">{{ $book->title }}</a> 
                    <br>
                    Penulis: {{ $book->author }} | Tahun Terbit: {{ $book->year }} | Stok: {{ $book->stock }}
                </li>
                <br>
            @endforeach
        </ul>
    @else
        <p>Maaf, saat ini belum ada buku yang tersedia.</p>
    @endif
@endsection