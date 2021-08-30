<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_products(){
        $products = Product::paginate(8);
        $categories = Category::all();
        return view('products', compact('products','categories'));
        //return $products->Category->name;
    }
    public function search_product(){
        $products = Product::where('category_id',request()->product_id)->paginate(8);
        $categories = Category::all();
        return view('products', compact('products','categories'));
    }

}
