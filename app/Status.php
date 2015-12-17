<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'display_status';
    
    
    
    
    public function posts()
    {
        return $this->hasMany('App\Post', 'id', 'display');
    }
    
}
