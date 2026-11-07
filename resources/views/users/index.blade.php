@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
    <h2>Kelola Pengguna (Khusus Admin)</h2>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - {{ $user->email }} (<strong>{{ $user->role }}</strong>)</li>
        @endforeach
    </ul>
@endsection