@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    
    {{-- Ini adalah syarat wajib penggunaan @if dari modul --}}
    @if(count($books) > 0)
        <ul>
            @foreach($books as $book)
                <li>
                    <a href="/books/{{ $book['id'] }}">{{ $book['judul'] }}</a> 
                    - {{ $book['penulis'] }} ({{ $book['tahun'] }})
                </li>
            @endforeach
        </ul>
    @else
        <p>Maaf, saat ini belum ada buku yang tersedia.</p>
    @endif
@endsection