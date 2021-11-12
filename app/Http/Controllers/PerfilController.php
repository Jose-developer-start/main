<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationPerfil;
use App\Sale;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','roles:1,2']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::where('user_id',auth()->user()->id)
            ->take(3)
            ->get();;
        return view('users.perfil',compact('sales'));
    }
    public function update(ValidationPerfil $request, $id)
    {
        $updateUser = $request->except('_token','_method');
        if(request()->hasFile('photo')){
            $updateUser['photo'] = request()->file('photo')->store('users','public'); 
            //Hash password
            $updateUser['password'] = bcrypt(request()->password); 
        }
        User::where('id',$id)->update($updateUser);
        return redirect()->route('perfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
