<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }
    public function show($slider_id){
        $slider = Slider::find($slider_id);
        return view('admin.sliders.show', compact('slider'));
    }
    public function update(Request $request, $id){
        $slider = Slider::find($id);
        if($request->hasFile('image')){
            $file = 'assets/uploads/slider/'.$slider->image;
            if(File::exists($file)){
                File::delete($file);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/slider/', $filename);
            $slider->image = $filename;
        }

        $slider->name = $request->name;
        $slider->slug = $request->slug;
        $slider->status = $request->status=='on'?1:0;
        $slider->popular = $request->popular=='on'?1:0;
        $slider->description = $request->description;
        $slider->meta_title = $request->meta_title;
        $slider->meta_descrip = $request->meta_descrip;
        $slider->meta_keywords = $request->meta_keywords;
        $slider->save();
        return redirect(route('admin.sliders.index'))->with('status', 'Слайдер был успешно обновлен');
    }
    public function edit($slider_id){
        $slider = Slider::find($slider_id);
        return view('admin.sliders.edit', compact('slider'));
    }
    public function delete($slider_id){
        $slider = Slider::find($slider_id);
        if($slider->image) {
            $file = 'assets/uploads/slider/' . $slider->image;
            if (File::exists($file)) {
                File::delete($file);
            }
        }
        $slider->delete($slider_id);
        return redirect(route('admin.sliders.index'))->with('status', 'Слайдер был успешно удален');
    }
    public function create(){
        return view('admin.sliders.create');
    }
    public function store(Request $request){
        $slider = new Slider();
        if($request->hasFile('background_image')){
            $file = $request->file('background_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/slider/bg/', $filename);
            $slider->background_image = $filename;
        }
        if($request->hasFile('small_image')){
            $file1 = $request->file('small_image');
            $ext = $file1->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file1->move('assets/uploads/slider/small/', $filename);
            $slider->small_image = $filename;
        }

        $slider->name = $request->name;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->link = $request->link;
        $slider->save();
        return redirect(route('admin.sliders.index'))->with('status', 'Слайдер был успешно добавлен');
    }
}
