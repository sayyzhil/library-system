<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library System')</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

    <h1>Library System</h1>

    <!-- NAVIGASI UTAMA (Hanya 1 baris ini) -->
    <nav>
        <a href="/dashboard">Dashboard</a> | 
        <a href="/books">Books</a> | 
        <a href="/categories">Categories</a> | 
        <a href="/members">Members</a> | 
        
        {{-- Menu khusus Admin --}}
        @can('manage-users')
            <a href="{{ route('users.index') }}">Kelola Pengguna</a> | 
        @endcan

        {{-- Tombol Logout --}}
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <hr>

    <!-- Isi konten halaman (Dashboard, Books, dll) akan ditampilkan di sini -->
    @yield('content')

    <br><br>
    <hr>
    <footer>
        <p>&copy; 2026 Sistem Informasi Perpustakaan</p>
    </footer>

</body>
</html>