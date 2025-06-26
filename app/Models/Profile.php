<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'birthday_at',
        'description',
        'phone',
        'address',
        'login',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function likedPosts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'likeable', 'likes');
    }

    public function likedComments(): MorphToMany
    {
        return $this->morphedByMany(Comment::class, 'likeable', 'likes');
    }
}
