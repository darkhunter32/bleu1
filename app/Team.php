<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Team extends Model
{
    use Translatable;
    protected $translatable = ['name','saying_title','saying_txt','job'];
    
}
