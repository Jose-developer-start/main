<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function user(){
        return $this->belongsTo('App\Users');
    }
    protected $fillable = ['date','payment','discount','paypal_data','quanty_products','status','user_id'];
}
