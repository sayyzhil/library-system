@extends('layouts.app')
@section('title', 'Edit Buku')
@section('content')
    <h2>Edit Buku</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div style="margin-bottom: 10px;">
            <label>Judul:</label><br>
            <input type="text" name="title" value="{{ old('title', $book->title) }}">
            @error('title') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ old('author', $book->author) }}">
            @error('author') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Tahun:</label><br>
            <input type="text" name="year" value="{{ old('year', $book->year) }}">
            @error('year') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Stok:</label><br>
            <input type="text" name="stock" value="{{ old('stock', $book->stock) }}">
            @error('stock') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
    <div style="margin-bottom: 10px;">
            <label>Kategori:</label><br>
            <select name="category_id">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Update Buku</button>
    </form>
    <br>
    <a href="{{ route('books.index') }}">Kembali</a>
@endsection