<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $guarded = [];

    public function workers()
    {
        return $this->hasMany('App\Models\Worker');
    }
}
