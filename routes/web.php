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

Route::get('/all', 'BookController@getAllBooks');

Route::get('/query2', 'BookController@getBooks2010New');

Route::get('/query3', 'BookController@getBooks1970Used');

Route::get('/query4', 'OrderController@getOrdersByYear');



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