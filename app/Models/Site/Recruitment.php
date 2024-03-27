<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $table = 'recruitment';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'bird_day',
        'address',
        'province',
        'email',
        'phone',
        'phone_alternative',
        'academic_degree',
        'function_want',
        'ocupation1',
        'ocupation2',
        'ocupation3',
        'year_of_expirience',
        'salary_want',
        'how_find_us',
        'onshore_offshore',
        'informatic',
        'portuguese',
        'english',
        'french',
        'bst',
        'huet',
        'maritime_note',
        'offshore_expirience',
        'active'
    ];
}
