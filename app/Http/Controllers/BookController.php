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
    public function getAllBooks(){
        return Book::all();
    }

    public function getBooks2010New(){
        return Book::where([
            ['release_date', '>=', 2010],
            ['type', 'new'],
        ])->get();
    }
    
    public function getBooks1970Used(){
        return Book::select('title', 'release_date', 'price', 'type')->where([
            ['release_date', '<', 1970],
            ['type', 'used'],
            ['price', '<', 20],
        ])->get();
    }

}
