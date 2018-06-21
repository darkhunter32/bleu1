<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class CTranslate extends Model
{
    use Translatable;
    protected $translatable = ['constant'];
}
