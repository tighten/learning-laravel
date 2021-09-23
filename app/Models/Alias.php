<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    protected $guarded = [];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
