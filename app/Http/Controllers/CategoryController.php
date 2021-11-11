<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */






    public function index()
    {
        $categories=Category::all();
        return view('admin/category/index_category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= new Category();
        return view('admin.category.create_category',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data=Request()->validate([
            'name' => 'required',
            'image' => 'required'

        ]);   
                if($request->hasFile('image'))
                {
                    $data['image'] = $request->file('image')->store('categories','public');
                }
            Category::create($data);
            return redirect()->route('category.create_category')->with('success',' Categoria Agregado exitosamente!!');
    }

  
    public function edit(Category $category)
    {
     return view('admin.category.edit_category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category  $category)
    {
        
        $data = Request()->validate([
            'name' => 'required',
           //LA COMA 'image' => 'required'
        ]);
            if($request->hasFile('image'))
            {
                Storage::delete('public/'.$category['image']);
                $data['image'] = $request->file('image')->store('categories','public');
            }
                $category->update($data);
                return redirect()->route('category.index_category')->with('success','Categoria  actualizado exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Storage::delete('public/'.$category['image']);
        $category->delete();
        return redirect()->route('category.index_category')->with('success','Categoria  eliminado correctamente!');
    }
}
