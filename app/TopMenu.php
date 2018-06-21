<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class TopMenu extends Model
{
    use Translatable;
    protected $translatable = ['menu','link'];
}
