<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class ProductSubSubcategoory extends Model
{
    use Translatable;
    protected $translatable = ['name'];

    public function s_s_cat()
    {
        return $this->belongsTo('App\ProductSubcategory','sub_category');
    }
}
