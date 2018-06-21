<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class ProductSubcategory extends Model
{
    use Translatable;
    protected $translatable = ['p_subcategories'];

    public function s_cat()
    {
        return $this->belongsTo('TCG\Voyager\Models\Page','category');
    }
}
