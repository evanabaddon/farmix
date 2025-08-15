<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'images',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'images' => 'array', // Tambahkan ini
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
