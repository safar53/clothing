<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
