<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $orders = Order::where('status', 'new')->get();
        return view('admin.dashboard', compact('orders'));
    }
}
