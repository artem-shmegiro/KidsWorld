<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'educator1', 'educator2', 'assistant', 'slogan'];

    public function kids()
    {
        return $this->hasMany('App\Models\Kid');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function mentor1()
    {
        return $this->belongsTo('App\Models\Worker', 'educator1', 'id');
    }

    public function mentor2()
    {
        return $this->belongsTo('App\Models\Worker', 'educator2', 'id');
    }

    public function assmentor()
    {
        return $this->belongsTo('App\Models\Worker', 'assistant', 'id');
    }

    public function scopeLastGroups($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
