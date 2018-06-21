<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class ExProject extends Model
{
    use Translatable;
    protected $translatable = ['name','description','txt_link'];
    public function e_exhibition()
    {
        return $this->belongsTo('App\Exhibition','exhibition');
    }  
    public function e_cat()
    {
        return $this->belongsTo('App\ExProjectsSubcat','category');
    }
}
