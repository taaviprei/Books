<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function list($year, $type){
        $books = Book::where('release_date', $year and 'type', $type)->get();
        return $books;
    }
}
