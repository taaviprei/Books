<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        $orders = Order::where('status', '!=', 'sent')->get();
        return $orders;
    }

    public function getOrdersByYear(){
        return Order::select([
            ['order_date'],
            [COUNT('id')],
            ])->GROUPBY('order_date')->get();
    }

        /*Route::get('/query4', function () {
        $query4 = DB::select('select year(order_date) as Aasta, count(id) as Tellimuste_arv from orders group by year(order_date)');
        dd($query4);
        return view('form');
    });*/
}
