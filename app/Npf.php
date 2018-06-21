<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Npf extends Model
{
    use Translatable;
    protected $translatable = ['title','txt'];
}
