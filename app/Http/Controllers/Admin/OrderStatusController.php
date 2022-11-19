<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrderStatusController extends Controller
{
    public function index(){
        $statuses = OrderStatus::all();
        return view('admin.statuses.index', compact('statuses'));
    }
    public function update(Request $request, $id){
        $status = OrderStatus::find($id);
        $status->name = $request->name;
        $status->code = $request->code;
        $status->color = $request->color;
        $status->save();
        return redirect(route('admin.statuses.index'))->with('status', 'Статус был успешно обновлен');
    }
    public function edit($status_id){
        $status = OrderStatus::find($status_id);
        return view('admin.statuses.edit', compact('status'));
    }
    public function delete($status_id){
        $status = OrderStatus::find($status_id);
        $status->delete($status_id);
        return redirect(route('admin.statuses.index'))->with('status', 'Статус был успешно удален');
    }
    public function create(){
        return view('admin.statuses.create')->with('status', 'Статус был успешно создан');
    }
    public function store(Request $request){
        $status = new OrderStatus();
        $status->name = $request->name;
        $status->code = $request->code;
        $status->color = $request->color;
        $status->save();
        return redirect(route('admin.statuses.index'))->with('status', 'Статус был успешно добавлен');
    }
}
