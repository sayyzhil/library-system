@extends('layouts.app')
@section('title', 'Daftar Anggota')
@section('content')
    <h2>Daftar Anggota Perpustakaan</h2>

    <form action="{{ route('members.store') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        <input type="text" name="member_code" placeholder="Kode Anggota (mis: MBR-001)" required>
        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="text" name="phone" placeholder="No. HP" required>
        <input type="text" name="address" placeholder="Alamat" required>
        <button type="submit">+ Tambah Anggota</button>
    </form>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Anggota</th>
                <th>No. HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->member_code }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection