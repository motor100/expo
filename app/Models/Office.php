<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_en',
        'title_tr',
        'address_ru',
        'address_en',
        'address_tr',
        'phone',
        'email',
        'time',
    ];
}
