<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        if(Auth::user()){
            $idUser = Auth::user()->id;
            $cartCollection = \Cart::session($idUser)->getContent();
        }else{
            $cartCollection = null;
        }
        $products = Product::paginate();
        return view('index', compact('products','cartCollection'));
        
    }

    public function show(){
        return view('products');
    }
}
