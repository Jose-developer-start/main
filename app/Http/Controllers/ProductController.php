<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function show_product(Product $product = null){//Routing model binding
        return view('show-product', compact('product'));
    }

}
