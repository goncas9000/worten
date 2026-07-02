<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'original_price',
        'image',
        'rating',
        'reviews_count',
        'seller',
        'badge',
        'delivery_days',
        'free_shipping',
        'options_count',
    ];

    protected $casts = [
        'price' => 'float',
        'original_price' => 'float',
        'rating' => 'float',
        'reviews_count' => 'integer',
        'delivery_days' => 'integer',
        'free_shipping' => 'boolean',
        'options_count' => 'integer',
    ];
}
