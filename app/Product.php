<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //table
    protected $table = "products";

    public function Category(){
        return $this->belongsTo('App\Category');
    }
    public function stock(){
        return $this->hasOne('App\Inventory');
    }
    public function getRouteKeyName()
    {
        return 'name';
    }
}
