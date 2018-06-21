<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;



class Company extends Model
{
    use Translatable;
    protected $translatable = ['title_t','txt_t'];
     
}
