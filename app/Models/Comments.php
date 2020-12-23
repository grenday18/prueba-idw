<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        // 'answer_id',
        'movie_id',
        'review_id',
        'comment',
    ];
}
