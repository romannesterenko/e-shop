<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    public function show($category_id){
        $category = Category::find($category_id);
        return view('admin.categories.show', compact('category'));
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        if($request->hasFile('image')){
            $file = 'assets/uploads/category/'.$category->image;
            if(File::exists($file)){
                File::delete($file);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }
        if($request->parent>0){
            $p_cat = Category::find($request->parent);
            $category->parent = $p_cat->id;
            $category->depth_level = ++$p_cat->depth_level;
        }
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status=='on'?1:0;
        $category->popular = $request->popular=='on'?1:0;
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_descrip = $request->meta_descrip;
        $category->meta_keywords = $request->meta_keywords;
        $category->save();
        return redirect(route('admin.categories.index'))->with('status', 'Категория была успешно обновлена');
    }
    public function edit($category_id){
        $category = Category::find($category_id);
        $categories = Category::where('depth_level', 1)->get();
        return view('admin.categories.edit', compact('category', 'categories'));
    }
    public function delete($category_id){
        $category = Category::find($category_id);
        if($category->image) {
            $file = 'assets/uploads/category/' . $category->image;
            if (File::exists($file)) {
                File::delete($file);
            }
        }
        $category->delete($category_id);
        return redirect(route('admin.categories.index'))->with('status', 'Категория была успешно удалена');
    }
    public function create(){
        $categories = Category::where('depth_level', 1)->get();
        return view('admin.categories.create', compact('categories'));
    }
    public function store(Request $request){
        $category = new Category();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }
        if($request->parent>0){
            $p_cat = Category::find($request->parent);
            $category->parent = $p_cat->id;
            $category->depth_level = ++$p_cat->depth_level;
        }
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status=='on'?1:0;
        $category->popular = $request->popular=='on'?1:0;
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_descrip = $request->meta_descrip;
        $category->meta_keywords = $request->meta_keywords;
        $category->created_by = Auth::user()->id;
        $category->save();
        return redirect(route('admin.categories.index'))->with('status', 'Категория была успешно добавлена');
    }
}
