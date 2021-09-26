<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['stock','status','product_id'];

    public function product(){
        return $this->hasOne('App\Product');
    }
}
