<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_short',
        'address_ru',
        'address_en',
        'address_tr',
        'phone',
        'email',
        'time',
    ];
}
