<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::paginate();
        return view('index', compact('products'));
        
    }

    public function show(){
        return view('products');
    }
}
