<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $cartItems = Cart::get();
        $total = Cart::totalSum();
        return view('checkout.index', compact('cartItems', 'total'));
    }

    public function store(Request $request)
    {
        dd($request);
        Order::placeOrder($request);
        return redirect(route('home'))->with('status', 'Заказ успешно создан');
    }
}
