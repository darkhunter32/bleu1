<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use Translatable;
    protected $translatable = ['title','text','alt','txt_link','name_exhibition'];
    
}
