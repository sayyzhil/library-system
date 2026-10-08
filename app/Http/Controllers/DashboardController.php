<?php

namespace App\Http\Controllers;

// Wajib tambahkan baris ini agar Dashboard mengenali tabel/Model Buku
use App\Models\Book; 

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            // Mengubah angka 5 manual menjadi perhitungan otomatis dari database
            'total_books' => Book::count(), 
            
            // Kategori dan Member biarkan manual dulu karena kita belum buat tabel databasenya
            'total_categories' => 5,
            'total_members' => 5
        ];
        
        return view('dashboard.index', compact('data'));
    }
}