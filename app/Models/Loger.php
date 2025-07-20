<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loger extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'operation_type',
        'logerable_type',
        'logerable_id',
        'old_content',
        'new_content',
    ];

    public function logerable(): MorphTo
    {
        return $this->morphTo();
    }
}
