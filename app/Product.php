<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use Translatable;
    protected $translatable = ['name','description','pdf','	caracteristiques','dimensions','capacite'];

    public function pr()
    {
        return $this->belongsTo('App\ProductSubSubcategoory','subcategory');
    }
}
