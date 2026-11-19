@extends('layouts.app')
@section('title', 'Data Peminjaman')
@section('content')
    <h2>Daftar Transaksi Peminjaman</h2>
    <a href="{{ route('borrowings.create') }}"><button>+ Tambah Peminjaman</button></a>
    <br><br>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Peminjam</th>
                <th>Buku & Jumlah</th>
                <th>Tgl Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Tgl Kembali</th>
                <th>Petugas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->member->name }} ({{ $borrowing->member->member_code }})</td>
                    <td>
                        @foreach ($borrowing->details as $detail)
                            {{ $detail->book->title }} ({{ $detail->quantity }} pcs)<br>
                        @endforeach
                    </td>
                    <td>{{ $borrowing->borrowing_date }}</td>
                    <td>{{ $borrowing->due_date }}</td>
                    <td>{{ $borrowing->return_date ?? '-' }}</td>
                    <td>{{ $borrowing->user->name }}</td>
                    <td><strong>{{ strtoupper($borrowing->status) }}</strong></td>
                    <td>
                        @if ($borrowing->status === 'borrowed')
                            <form action="{{ route('borrowings.return', $borrowing->id) }}" method="POST">
                                @csrf
                                <button type="submit">Kembalikan</button>
                            </form>
                        @else
                            Selesai
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection