<?php

namespace App\Http\Controllers;

use App\Sale_detail;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class generatorPDFController extends Controller
{
    public function __construct()
    {
        set_time_limit(300); //Aumentar limite
        $this->middleware('auth');   
    }

    public function factura(){
        $data = DB::table('sale_details')
                        ->join('sales','sale_details.sale_id','=','sales.id')
                        ->join('products','sale_details.product_id','=','products.id')
                        ->where('sales.user_id',auth()->user()->id)
                        ->where('sales.id',session('sale_id'))
                        ->get();
        
        $data = compact('data');
        $pdf = \PDF::loadView('pdf.factura', $data);
        return $pdf->download("factura#".session('sale_id').".pdf");
    }
    public function compra(Sale_detail $sale){
        /**
         * 
         * $id => ID DE COMPRA PARA GENERAR FACTURAS DESDE SU HISTORIAL
         * 
         */
        $id = $sale->id;
        $data = DB::table('sale_details')
            ->join('sales','sale_details.sale_id','=','sales.id')
            ->join('products','sale_details.product_id','=','products.id')
            ->where('sales.user_id',auth()->user()->id)
            ->where('sales.id',$id)
            ->get();

        $data = compact('data');
        $pdf = \PDF::loadView('pdf.factura', $data);
        return $pdf->stream("factura#".session('sale_id').".pdf");

    }

}
