<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Category;
use App\Models\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'total_books' => Book::count(),
            'total_categories' => Category::count(),
            'total_members' => Member::count(),
            'total_borrowings' => Borrowing::count(),
            'active_borrowings' => Borrowing::where('status', 'borrowed')->count(),
        ];

        return view('dashboard.index', compact('data'));
    }
}