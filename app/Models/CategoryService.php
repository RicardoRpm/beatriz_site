<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    use HasFactory;

    protected $table = 'categoryServices';

    protected $fillable = [
        'title_fr',
        'title_pt',
        'title_en'
    ];
}
