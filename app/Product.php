<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //table
    protected $table = "products";
    //Insert 
    protected $fillable = ['name','description','purchase_price','sale_price','discount','model','image','brand_id','supplier_id','category_id'];

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
