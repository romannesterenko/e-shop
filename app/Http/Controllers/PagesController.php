<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function check_slug(Request $request)
    {
        $slug = Str::slug($request->title, '_');
        return response()->json(['slug' => $slug]);
    }
}
