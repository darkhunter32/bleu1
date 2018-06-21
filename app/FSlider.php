<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class FSlider extends Model
{
    use Translatable;
    protected $translatable = ['title_small','title_big','txt_link1','txt_link2','txt_video','slide_title'];
    
}
