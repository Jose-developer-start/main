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
        $cartCollection = \Cart::getContent();
        return view('cart', compact('cartCollection'));
    }
    public function add(){
        \Cart::add(
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
        \Cart::update($idProduct, [
            'quantity' => [
                'relative' => false,
                'value' => request()->quantity 
            ],
        ]);
        return redirect()->route('cart.index');
    }
    public function remove(){
        $idProduct = request()->id;
        \Cart::remove($idProduct);
        return redirect()->route('cart.index');
    }
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index');
    }
}
