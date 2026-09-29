<?php

namespace App\Http\Controllers;

use App\Models\Book; // Wajib ditambahkan agar Model terbaca

class BookController extends Controller
{
    public function index()
    {
        // Mengambil seluruh data buku dari database
        $books = Book::all(); 
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }
}