<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }
    public function show($order_id){
        $order = Order::find($order_id);
        return view('admin.orders.show', compact('order'));
    }
    public function update(Request $request, $id){

        return redirect(route('admin.orders.index'))->with('status', 'Продукт был успешно обновлен');
    }
    public function edit($order_id){
        $order = Order::find($order_id);
        return view('admin.orders.edit', compact('order'));
    }
    public function delete($order_id){
        $order = Order::find($order_id);
        if($order->image) {
            $file = 'assets/uploads/order/' . $order->image;
            if (File::exists($file)) {
                File::delete($file);
            }
        }
        $order->delete($order_id);
        return redirect(route('admin.orders.index'))->with('status', 'Категория была успешно удалена');
    }
    public function create(){
        $categories = Category::all();
        return view('admin.orders.create', compact('categories'));
    }
    public function store(Request $request){
        $order = new Order();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/order/', $filename);
            $order->image = $filename;
        }
        if($request->original_price!=$request->selling_price){
            $order->action = 1;
        }else{
            $order->action = 0;
        }
        $order->category_id = $request->category_id;
        $order->name = $request->name;
        $order->slug = $request->slug;
        $order->small_description = $request->small_description;
        $order->description = $request->description;
        $order->original_price = $request->original_price;
        $order->selling_price = $request->selling_price;
        $order->qty = $request->qty;
        $order->tax = $request->tax;
        $order->status = $request->status=='on'?1:0;
        $order->trending = $request->trending=='on'?1:0;
        $order->meta_title = $request->meta_title;
        $order->meta_descrip = $request->meta_descrip;
        $order->meta_keywords = $request->meta_keywords;
        $order->save();
        return redirect(route('admin.orders.index'))->with('status', 'Продукт был успешно добавлен');
    }
}
