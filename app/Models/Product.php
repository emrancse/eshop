<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'name',
        'slug',
        'sku',
        'description',
        'quantity',
        'weight',
        'price',
        'sale_price',
        'status',
        'featured'
    ];


    protected $casts = [
        'brand_id' => 'integer',
        'quantity' => 'integer',
        'status'   => 'boolean',
        'featured' => 'boolean'
    ];
}
