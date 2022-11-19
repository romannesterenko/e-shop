<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    protected $table = 'order_statuses';

    protected $fillable = [
        'name',
        'code',
        'color'
    ];

    public static function findByCode(mixed $code)
    {
        return self::where('code', $code)->first();
    }
}
