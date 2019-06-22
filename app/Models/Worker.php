<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo('App\Models\Position', 'position', 'key');
    }

    public function post_second()
    {
        return $this->belongsTo('App\Models\Position', 'position_second', 'key');
    }

    public function group()
    {
        return $this->hasOne('App\Models\Group');
    }
}
