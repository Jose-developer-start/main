<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //

    public function product(){
        $this->hasMany('app\Product');
    }
}
