<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BookController@index');

//Route::get('/books', 'BookController@list');

Route::get('/books/{year}', 'BookController@list');

Route::get('/authors', 'AuthorController@list');

Route::get('/orders', 'OrderController@list');

Route::get('/query1', function () {
    $books = DB::select('select * from books');
    dd($books);
    return view('form');
});

Route::get('/query2', function () {
    $query2 = DB::select('select * from books where release_date >= 2010 and type != "ebook" and type != "used" order by title');
    dd($query2);
    return view('form');
});

Route::get('/query3', function () {
    $query3 = DB::select('select title, release_date, price, type from books where release_date < 1970 and type = "used" and price < 20 order by title');
    dd($query3);
    return view('form');
});

Route::get('/query4', function () {
    $query4 = DB::select('select year(order_date) as Aasta, count(id) as Tellimuste_arv from orders group by year(order_date)');
    dd($query4);
    return view('form');
});

Route::get('/query5', function () {
    $query5 = DB::select('select sum(books.price) as Summa, year(orders.order_date) as Aasta, count(orders.id) as Tellimuste_arv from orders 
    left join books on orders.book_id = books.id group by year(orders.order_date)');
    dd($query5);
    return view('form');
});

Route::post('/send', function (Request $request) {
    return view('form', compact('request'));
});

Route::get('/webapi', function() {
    return view('/webapi');
});