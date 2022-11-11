<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
    public function show($product_id){
        $product = Product::find($product_id);
        return view('admin.products.show', compact('product'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        if($request->hasFile('image')){
            $file = 'assets/uploads/product/'.$product->image;
            if(File::exists($file)){
                File::delete($file);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/', $filename);
            $product->image = $filename;
        }
        if($request->original_price!=$request->selling_price){
            $product->action = 1;
        }else{
            $product->action = 0;
        }
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->small_description = $request->small_description;
        $product->description = $request->description;
        $product->original_price = $request->original_price;
        $product->selling_price = $request->selling_price;
        $product->qty = $request->qty;
        $product->tax = $request->tax;
        $product->status = $request->status=='on'?1:0;
        $product->trending = $request->trending=='on'?1:0;
        $product->meta_title = $request->meta_title;
        $product->meta_descrip = $request->meta_descrip;
        $product->meta_keywords = $request->meta_keywords;
        $product->save();
        return redirect(route('admin.products.index'))->with('status', 'Продукт был успешно обновлен');
    }
    public function edit($product_id){
        $product = Product::find($product_id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }
    public function delete($product_id){
        $product = Product::find($product_id);
        if($product->image) {
            $file = 'assets/uploads/product/' . $product->image;
            if (File::exists($file)) {
                File::delete($file);
            }
        }
        $product->delete($product_id);
        return redirect(route('admin.products.index'))->with('status', 'Категория была успешно удалена');
    }
    public function create(){
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request){
        $product = new Product();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/', $filename);
            $product->image = $filename;
        }
        if($request->original_price!=$request->selling_price){
            $product->action = 1;
        }else{
            $product->action = 0;
        }
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->small_description = $request->small_description;
        $product->description = $request->description;
        $product->original_price = $request->original_price;
        $product->selling_price = $request->selling_price;
        $product->qty = $request->qty;
        $product->tax = $request->tax;
        $product->status = $request->status=='on'?1:0;
        $product->trending = $request->trending=='on'?1:0;
        $product->meta_title = $request->meta_title;
        $product->meta_descrip = $request->meta_descrip;
        $product->meta_keywords = $request->meta_keywords;
        $product->save();
        return redirect(route('admin.products.index'))->with('status', 'Продукт был успешно добавлен');
    }
}
