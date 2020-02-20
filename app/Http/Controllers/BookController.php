<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function list($year){
        $books = Book::where('release_date', '=', $year)
        ->where('type', 'new')
        ->orderBy('title')
        ->with('orders')
        ->get(['id', 'title', 'release_date', 'price', 'type']);
        return $books;
    }
}
