<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ComprasController extends Controller
{
    public function index(){

        $data = DB::table('sale_details')
            ->join('sales','sale_details.sale_id','=','sales.id')
            ->join('products','sale_details.product_id','=','products.id')
            ->where('sales.user_id',auth()->user()->id)
            ->get();

        return view('admin.compras.index',compact('data'));

    }
}
