<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    public $fillable = [
        'nombre',
        'duracion',
        'date_publish',
        'banner_img',
        'sinopsis',
    ];
}
