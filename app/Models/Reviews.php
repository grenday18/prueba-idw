<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'movie_id',
        'title',
        'points',
        'critica',
    ];
}
