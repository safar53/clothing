<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    public function slider_types()
    {
         return $this->belongsToMany('App\SliderType');
    }

}
