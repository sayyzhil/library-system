@extends('layouts.app')
@section('title', 'Tambah Peminjaman')
@section('content')
    <h2>Form Peminjaman Buku</h2>

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 10px;">
            <label>Anggota Peminjam:</label><br>
            <select name="member_id" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach ($members as $member)
                    <option value="{{ $member->id }}" @selected(old('member_id') == $member->id)>
                        {{ $member->member_code }} - {{ $member->name }}
                    </option>
                @endforeach
            </select>
            @error('member_id') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Buku yang Dipinjam:</label><br>
            <select name="book_id" required>
                <option value="">-- Pilih Buku --</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" @selected(old('book_id') == $book->id)>
                        {{ $book->title }} (Stok: {{ $book->stock }})
                    </option>
                @endforeach
            </select>
            @error('book_id') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Jumlah Pinjam:</label><br>
            <input type="number" name="quantity" value="{{ old('quantity', 1) }}" min="1" required>
            @error('quantity') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Simpan Transaksi</button>
    </form>
    <br>
    <a href="{{ route('borrowings.index') }}">Kembali</a>
@endsection