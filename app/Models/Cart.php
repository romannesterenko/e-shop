<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'session_id',
        'user_id',
        'product_id',
        'quantity',
        'price',
    ];
    private static function getBySessId(){
        return self::where(['session_id' => session()->getId()]);
    }
    public static function getByUserId($user_id){
        return self::where(['user_id' => $user_id])->get();
    }
    public static function get(){
        return self::getBySessId()->get();
    }

    public static function getItem($product_id, $session_id)
    {
        return self::where(['session_id' => $session_id, 'product_id' => $product_id])->first();
    }

    public static function incrementQuantity($cart_id)
    {
        $total = 0;
        $cart = Cart::findOrFail($cart_id);
        $new_quantity = ++$cart->quantity;
        $price = $new_quantity*$cart->price;
        $cart->quantity = $new_quantity;
        $cart->save();
        return ['quantity' => $new_quantity, 'price'=>round($price, 2), 'total'=>round($total = self::getAjaxCartTotalSum($cart->session_id), 2)];
    }

    public static function setQuantity($quantity, $cart_id)
    {
        $total = 0;
        $cart = Cart::findOrFail($cart_id);
        if($quantity>1)
            $new_quantity = $quantity;
        else
            $new_quantity=1;
        $price = $new_quantity*$cart->price;
        $cart->quantity = $new_quantity;
        $cart->save();
        return ['quantity' => $new_quantity, 'price'=>round($price, 2), 'total'=>round($total = self::getAjaxCartTotalSum($cart->session_id), 2)];

    }
    public static function decrementQuantity($cart_id)
    {
        $total = 0;
        $cart = Cart::findOrFail($cart_id);
        if($cart->quantity>1)
            $new_quantity = --$cart->quantity;
        else
            $new_quantity=1;
        $price = $new_quantity*$cart->price;
        $cart->quantity = $new_quantity;
        $cart->save();
        return ['quantity' => $new_quantity, 'price'=>round($price, 2), 'total'=>round($total = self::getAjaxCartTotalSum($cart->session_id), 2)];
    }

    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public static function totalSum(){
        return self::getBySessId()->get()->map(function ($item){
            return $item->price*$item->quantity;
        })->sum();
    }
    public static function getAjaxCart($session_id){
        return self::where(['session_id' => $session_id])->get();
    }
    public static function getAjaxCartTotalSum($session_id){
        return self::where(['session_id' => $session_id])->get()->map(function ($item){
            return $item->price*$item->quantity;
        })->sum();
    }
    public static function add($product_id, $quantity)
    {
        $product = Product::findOrFail($product_id);

        if($cart = self::where(['session_id' => session()->getId(), 'product_id' => $product->id])->first()){
            $cart->quantity = $cart->quantity+$quantity;
            $cart->save();
        }else{
            $cart = self::create([
                'session_id' => session()->getId(),
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->selling_price
            ]);

        }

        return $cart;
    }
}
