<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $top_categories = Category::where('popular', 1)->take(6)->get();
        $sliders = Slider::all();
        $pomotional_products = Product::where('action', 1)->take(10)->get();
        return view('home', compact('sliders', 'top_categories', 'pomotional_products'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('catalog.category', compact('category', 'products'));
    }
    public function product($prod_slug)
    {
        $product = Product::where('slug', $prod_slug)->first();
        return view('catalog.product', compact( 'product'));
    }
}
