<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $title = 'Daftar Buku';
        $books = Book::all();
        return view('books.index', compact('books', 'title'));
    }


    public function create()
    {
        $title = 'Tambah Buku';
        return view('books.create', compact('title'));
    }


    public function store(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);
        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        $title = 'Detail Buku';
        return view('books.show', compact('book', 'title'));
    }


    public function edit(Book $book)
    {
        $title = 'Edit Buku';
        return view('books.edit', compact('book', 'title'));
    }


    public function update(Request $request, Book $book)
    {
        $title = 'Edit Buku';
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);
        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $title = 'Hapus Buku';
        $book->delete();
        return redirect()->route('books.index');
    }
}