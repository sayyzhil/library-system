@extends('layouts.app')
@section('title', 'Daftar Kategori')
@section('content')
    <h2>Daftar Kategori</h2>

    <form action="{{ route('categories.store') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        <input type="text" name="name" placeholder="Nama Kategori Baru" required>
        <button type="submit">+ Tambah Kategori</button>
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror
    </form>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $index => $category)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection