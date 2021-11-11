<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model{
    
    protected $fillable = ['name','direction','phone','image'];

    public function product(){
        $this->hasMany('app\Product');
    }
}
