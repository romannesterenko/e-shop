<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user',
        'first_name',
        'last_name',
        'price',
    ];

    public static function placeOrder(Request $request){
        $order = new Order();
        $order->user = Auth::user()->id;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->save();
        if($order->id>0){
            $cart = Cart::getByUserId($order->user);
            if($cart->count()==0)
                $cart = Cart::get();
            $all_sum = 0;
            foreach ($cart as $cartItem){
                $orderItem = new OrderProduct();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $cartItem->product_id;
                $orderItem->quantity = $cartItem->quantity;
                $orderItem->price = round($cartItem->quantity*$cartItem->price, 2);
                $all_sum+=$orderItem->price;
                $orderItem->save();
                $cartItem->delete();
            }
            $order->price = $all_sum;
            $order->save();
        }

    }
}
