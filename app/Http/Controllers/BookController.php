<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;

class BookController extends Controller
{

    public function index()
    {
        $title = 'Daftar Buku';
        $books = Book::with('category')->get();
        return view('books.index', compact('books', 'title'));
    }


    public function create()
    {
        $title = 'Tambah Buku';
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|digits:4|integer|min:1900|max:2026',
            'stock' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);
        return redirect()
        ->route('books.index')
        ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        $title = 'Detail Buku';
        return view('books.show', compact('book', 'title'));
    }


    public function edit(Book $book)
    {
        $title = 'Edit Buku';
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
    }


    public function update(Request $request, Book $book)
    {
        $title = 'Edit Buku';
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|digits:4|integer|min:1900|max:2026',
            'stock' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);
        $book->update($validated);
        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $title = 'Hapus Buku';
        $book->delete();
        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}