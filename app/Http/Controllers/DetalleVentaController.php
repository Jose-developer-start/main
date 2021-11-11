<?php
namespace App\Http\Controllers;
use App\Sale;
use App\User;
use App\Product;
use App\Sale_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 $dataventa= DB::table('sale_details')
                        ->join('sales','sale_details.sale_id','=','sales.id')
                        ->join('products','sale_details.product_id','=','products.id')
                        ->join("users", "sales.user_id", "=", "users.id")
                        ->select('sale_details.*', 'sales.discount','sales.date','products.name','users.name as name_user','users.surname')
                        ->get();
                        return view('admin.reportes.reporte_venta',compact('dataventa'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function create()
    {
        $fecha= new Sale_detail();
        $produc= Product::all();


        return view('admin.reportes.reporte_fecha',compact('fecha','produc'));
    }



    public function indexfecha()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
    $fecha= DB::table('sale_details')
                ->join('sales','sale_details.sale_id','=','sales.id')
                ->join('products','sale_details.product_id','=','products.id')
                ->join("users", "sales.user_id", "=", "users.id")
                ->select('sale_details.*', 'sales.discount','sales.date','products.name','users.name as name_user','users.surname')

                 ->whereBetween('sales.date', [request()->from,request()->to])
                 ->get();
                         //dd($fecha);
                       // return request()->from;
                    return view('admin.reportes.reporte_fecha',compact('fecha'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleVenta $detalleVenta)
    {
        //
    }
}
