@extends('layouts.app')
@section('title', $title)
@section('content')
    <h2>Daftar Buku</h2>
    <a href="{{ route('books.create') }}"><button>+ Tambah Buku</button></a>
    <br><br>
    
    @if(count($books) > 0)
        <table border="1" cellpadding="10">
            <tr>
                <th>Judul</th> <th>Penulis</th> <th>Aksi</th>
            </tr>
            @foreach($books as $book)
            <tr>
                <td><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}"><button>Edit</button></a>
                    
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @else
        <p>Maaf, saat ini belum ada buku yang tersedia.</p>
    @endif
@endsection