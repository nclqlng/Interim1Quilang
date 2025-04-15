<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestBooks = Book::latest()->take(3)->get();
        return view('home', compact('latestBooks'));
    }
}