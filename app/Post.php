<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'display',
        'image_id',
        'excerpt'
    ];

    public function status()
    {
        return $this->belongsTo('App\Status', 'display', 'id');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
