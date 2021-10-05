<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::paginate(10);
        return view('admin.inventories.index',compact('inventories'));
    }
    
    public function edit(Inventory $inventario)
    {
        return view('admin.inventories.edit',compact('inventario'));
    }
    public function update(Inventory $inventario)
    {
        $data = request()->all();
        $inventario->update($data);
        return redirect()->route('inventario.index')->with('success','Producto actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
