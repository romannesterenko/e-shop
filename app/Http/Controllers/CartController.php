<?php

namespace App\Http\Controllers;

use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::get();
        $total = Cart::totalSum();
        return view('cart.index', compact('cartItems', 'total'));
    }
    public function checkout()
    {
        $cartItems = Cart::get();
        $total = Cart::totalSum();
        return view('checkout.index', compact('cartItems', 'total'));
    }
    public function addToCart($product_id, $quantity)
    {
        $cart = Cart::add($product_id, $quantity);
        return response()->json(['cart' => $cart]);
    }
    public function deleteFromCart($item_id)
    {
        if($cart_item = Cart::find($item_id))
            $cart_item->delete();
        return response()->json(['success' => true]);
    }

    public function getAjaxCart($session_id)
    {
        $cartItems = Cart::getAjaxCart($session_id);
        $total = Cart::getAjaxCartTotalSum($session_id);
        return view('cart.ajax', compact('cartItems', 'total'));
    }

    public function getAjaxCountCart($session_id)
    {
        return Cart::getAjaxCart($session_id)->count();

    }

    public function getTotalSum($session_id)
    {
        return Cart::getAjaxCartTotalSum($session_id);
    }

    public function AjaxCartActions($action, $cart_id)
    {
        if($action=='inc')
            return response()->json(Cart::incrementQuantity($cart_id));
        if($action=='dec')
            return response()->json(Cart::decrementQuantity($cart_id));
    }

    public function SetQuantity($quantity, $id)
    {
        return response()->json(Cart::setQuantity($quantity, $id));
    }
}
