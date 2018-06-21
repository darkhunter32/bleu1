<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Partner extends Model
{
    use Translatable;
    protected $translatable = ['partner','txt_link','desc'];
    
}
