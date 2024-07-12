<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_fr',
        'title_pt',
        'title_en',
        'description_fr',
        'description_pt',
        'description_en',
        'img',
        'img_2',
        'img_3'
    ];
}
