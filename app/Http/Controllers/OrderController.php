<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        $orders = Order::all();
        return $orders;
    }
}
