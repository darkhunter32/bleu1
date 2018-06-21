<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Exhibition extends Model
{
    use Translatable;
    protected $translatable = ['name','description'];

    public function city_e()
    {
        return $this->belongsTo('App\City','location');
    }  
}
