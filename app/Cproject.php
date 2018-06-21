<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Cproject extends Model
{
    use Translatable;
    protected $translatable = ['project','txt'];
    
}
