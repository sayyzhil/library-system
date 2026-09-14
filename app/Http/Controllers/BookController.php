<?php
namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'judul' => 'Pemrograman Web', 'penulis' => 'Billy Ibrahim', 'tahun' => 2024],
            ['id' => 2, 'judul' => 'Struktur Data', 'penulis' => 'Azhali Ali', 'tahun' => 2023],
            ['id' => 3, 'judul' => 'Basis Data', 'penulis' => 'Oman Komarudin', 'tahun' => 2025],
            ['id' => 4, 'judul' => 'Sistem Operasi', 'penulis' => 'Carudin', 'tahun' => 2022],
            ['id' => 5, 'judul' => 'Jaringan Komputer', 'penulis' => 'Aziz Masum', 'tahun' => 2024],
        ];
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}