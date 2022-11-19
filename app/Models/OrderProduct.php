<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    public static function setProductsToOrder($order_id)
    {
        $cart = Cart::get();
        foreach ($cart as $cartItem){
            $orderItem = new OrderProduct();
            $orderItem->order_id = $order_id;
            $orderItem->product_id = $cartItem->product_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->price = round($cartItem->quantity*$cartItem->price, 2);
            $orderItem->save();
            $cartItem->delete();
        }
    }

    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
