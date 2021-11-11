<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
 
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $suppliers = Supplier::all();
        return view('admin.suplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $supplier = new Supplier();

       // $suppliers = Supplier::all(); Todos los proveedores

        return view('admin.suplier.create',compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $data = Request()->validate([
            'name' => 'required',
            'direction' => 'required',
            'phone' => 'required',
            'image' => 'required'

        ]);
              if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('suppliers','public');
        }

        Supplier::create($data);
        return redirect()->route('suplier.create')->with('success',' Proveedor Agregado exitosamente!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Supplier $supplier)
    {

return view('admin.suplier.edit',compact('supplier'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $data = Request()->validate([
            'name' => 'required',
            'direction' => 'required',
            'phone' => 'required'
           //LA COMA 'image' => 'required'
        ]);
        if($request->hasFile('image')){
            Storage::delete('public/'.$supplier['image']);
            $data['image'] = $request->file('image')->store('suppliers','public');
        }
        $supplier->update($data);
        return redirect()->route('suplier.index')->with('success','Proveedor  actualizado exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
         Storage::delete('public/'.$supplier['image']);
        $supplier->delete();
        return redirect()->route('suplier.index')->with('success','Proveedor  eliminado correctamente!');
    }
}
