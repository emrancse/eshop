<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [

        'name','slug','description','image','parent_id','featured','menu'
    ];

    protected $casts = [
        'parent_id' => 'integer',
        'featured' => 'boolean',
        'menu'     => 'boolean'
    ];


}
