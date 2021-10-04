<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['stock','status','product_id'];

    public function products(){
        return $this->hasMany('App\Product','id','product_id');
    }
}
