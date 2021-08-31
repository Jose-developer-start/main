<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_products($category = null){
        if(!empty($category)){
            $cate = Category::where('name',$category)->get();
            $products = Product::where('category_id',$cate[0]->id)->paginate(8);
            $categories = Category::all();
            return view('products', compact('products','categories'));
        }else{
            $products = Product::paginate(8);
            $categories = Category::all();
            return view('products', compact('products','categories'));
        }
    }
    public function show_product($name = null){
        $product = Product::where('name',$name)->get();
        return view('show-product', compact('product'));
    }

}
