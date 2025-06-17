<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'author',
        'tag',
        'img_path',
        'content',
        'published_at',
        'views',
        'status',
        'category',
        'is _active',
    ];
}
