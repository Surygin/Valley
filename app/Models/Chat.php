<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'profile_id'
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
