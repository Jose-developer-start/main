<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Sale;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $products = Product::orderBy('id','desc')->limit(4)->get(); //Modelo de productos
        $categories = Category::all(); //Modelo de categorias
        return view('index', compact('products','categories'));
        
    }
    public function dashboard(){
        /**
         * 
         * USUARIOS
         * 
         */
        //Query cantidad de compras
        $comprasCantidad = Sale::where('user_id',Auth::user()->id)->count();
        //Cantidad de productos
        $productCantidad = DB::select('SELECT SUM(quanty_products) as cantidadProductos FROM `sales` WHERE user_id = ?', [Auth::user()->id]);
        $productCantidad = $productCantidad[0]->cantidadProductos;
        //Categorias
        $estadoCompras = DB::select('SELECT COUNT(status) AS "count" FROM `sales` WHERE user_id = ?', [Auth::user()->id]);
        $estadoCompras = $estadoCompras[0]->count;
        
        /**
         * AMINISTRADOR
         */
        $usuariosCantidad = null;
        $stock = null;
        if(Auth::user()->id == 1){
            $comprasCantidad = Sale::count();
            $usuariosCantidad = User::count();
            $stock = DB::select('SELECT SUM(stock) as stock FROM `inventories`');
            $stock = $stock[0]->stock;
        }
        return view('admin.home', compact('comprasCantidad','productCantidad','estadoCompras','usuariosCantidad','stock'));
    }
}
