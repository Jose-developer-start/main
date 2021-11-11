<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_detail extends Model
{
    //Table
    protected $table = "sale_details";
    protected $fillable = ['unit_price','quanty','sale_id','product_id'];
}
