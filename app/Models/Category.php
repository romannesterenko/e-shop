<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'parent',
        'image',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
    ];

    public function author():User
    {
        return User::find($this->created_by);
    }
    public function child(){
        return self::where('parent', $this->id)->get();
    }

    public function parent()
    {
        return self::find($this->parent);
    }
}
