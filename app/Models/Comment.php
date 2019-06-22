<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo('App\Models\Article', 'article_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo('App\Models\Group', 'group_id', 'id');
    }

    public function scopeLastComments($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
