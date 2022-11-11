<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('checkout.index');
    }

    public function store(Request $request)
    {
        Order::placeOrder($request);
        return redirect(route('home'))->with('status', 'Заказ успешно создан');
    }
}
