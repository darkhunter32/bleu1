<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class ExProjectsSubcat extends Model
{
    use Translatable;
    protected $translatable = ['name'];
    
    public function e_scat()
    {
        return $this->belongsTo('App\ExProjectsCat','category');
    }
}
