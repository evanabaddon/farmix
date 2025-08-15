<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfferBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtitle',
        'title',
        'text',
        'price_old',
        'price_new',
        'background_image',
        'offer_image',
        'link',
    ];
}
