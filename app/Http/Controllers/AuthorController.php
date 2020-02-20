<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function list(){
        $authors = Author::all();
        return $authors;
    }
}
