<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ComprasController extends Controller
{
    public function index(){
        $data = DB::table('sales')
            ->where('sales.user_id',auth()->user()->id)
            ->paginate(10);
        return view('admin.compras.index',compact('data'));
    }
}
