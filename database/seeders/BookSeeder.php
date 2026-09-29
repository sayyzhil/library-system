<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create(['title' => 'Pemrograman PHP', 'author' => 'Billy', 'year' => 2024, 'stock' => 5]);
        Book::create(['title' => 'Laravel untuk Pemula', 'author' => 'Zhilan', 'year' => 2023, 'stock' => 10]);
        Book::create(['title' => 'Basis Data Dasar', 'author' => 'Luthfi', 'year' => 2025, 'stock' => 7]);
        Book::create(['title' => 'Logika Algoritma', 'author' => 'Ilham', 'year' => 2022, 'stock' => 3]);
        Book::create(['title' => 'Sistem Informasi', 'author' => 'Juneo', 'year' => 2024, 'stock' => 8]);
    }
}