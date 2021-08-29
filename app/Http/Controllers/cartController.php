<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class cartController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function cart(){
        $idUser = Auth::user()->id;
        $cartCollection = \Cart::session($idUser)->getContent();
        return view('cart', compact('cartCollection'));
    }
    public function add(){
        $idUser = Auth::user()->id;
        \Cart::session($idUser)->add(
            array(
                'id' => request()->id,
                'name' => request()->name,
                'price' => request()->price,
                'quantity' => request()->quantity,
                'attributes' =>[
                    'details' => request()->details,
                    'image' => request()->image
                ]
            )
        );
        return redirect()->route('cart.index');
        
    }
    public function update(){
        $idProduct = request()->id;
        $idUser = Auth::user()->id;
        \Cart::session($idUser)->update($idProduct, [
            'quantity' => [
                'relative' => false,
                'value' => request()->quantity 
            ],
        ]);
        return redirect()->route('cart.index');
    }
    public function remove(){
        $idProduct = request()->id;
        $idUser = Auth::user()->id;
        \Cart::session($idUser)->remove($idProduct);
        return redirect()->route('cart.index');
    }
    public function clear(){
        $idUser = Auth::user()->id;
        \Cart::session($idUser)->clear();
        return redirect()->route('cart.index');
    }
}
