<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_en',
        'title_tr',
        'name_ru',
        'name_en',
        'name_tr',
        'image',
    ];
}
