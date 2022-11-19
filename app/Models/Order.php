<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user',
        'status',
        'first_name',
        'last_name',
        'zipcode',
        'city',
        'street',
        'house',
        'flat',
        'phone',
        'email',
        'price'
    ];

    public function statuses(){
        return OrderStatus::findByCode($this->status);
    }

    public static function placeOrder(Request $request){
        $order = new Order();
        if($user = User::getByEmail($request->email)){
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->zipcode = $request->zipcode;
            $user->city = $request->city;
            $user->street = $request->street;
            $user->house = $request->house;
            $user->flat = $request->flat;
            $user->phone = $request->phone;
            $user->save();
        }else{
            $user = new User();
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->password = Hash::make('90Tazuna');
            $user->zipcode = $request->zipcode;
            $user->city = $request->city;
            $user->street = $request->street;
            $user->house = $request->house;
            $user->flat = $request->flat;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->save();
        }
        $order->user = $user->id;
        $order->first_name = $request->name;
        $order->last_name = $request->last_name;
        $order->zipcode = $request->zipcode;
        $order->city = $request->city;
        $order->street = $request->street;
        $order->house = $request->house;
        $order->flat = $request->flat;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->price = $request->price;
        $order->save();
        if($order->id>0){
            OrderProduct::setProductsToOrder($order->id);
        }

    }
}
