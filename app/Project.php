<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use Translatable;
    protected $translatable = ['name','description','txt_link'];

    public function exhibition_f()
    {
        return $this->belongsTo('App\Exhibition','exhibition');
    }
    
}
