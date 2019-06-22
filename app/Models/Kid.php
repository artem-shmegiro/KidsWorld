<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo('App\Models\Group', 'group_id', 'id');
    }
}
