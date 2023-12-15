<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'desc_ru',
        'desc_en',
        'desc_tr',
    ];
}
