<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
