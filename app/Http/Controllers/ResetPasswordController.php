<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function password_reset(){
        $data = Request()->validate([
            'email' => 'required'
        ]);
        if(User::where('email',$data['email'])->exists()){
            $this->send_email($data);
            return redirect()->back()->with('send_reset_email','Correo enviado');
        }else{
            return redirect()->back()->with('error_reset_email','Correo enviado');
        }
    }

    public function password_update(){

        return view('auth.passwords.reset');
    }

    public function new_password(){

        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
        //Scryted password 
        $data['password'] = bcrypt( $data['password'] );
        User::where('email',$data['email'])->update($data);
        return redirect()->route('login')->with('updated-password','tu contraseña se a ha modificado satisfactoriamente');
    }

    public function send_email($data){
        $subject = "Restablecimiento de contraseña";

        $for = $data['email'];

        Mail::send('mails.reset_password',$data, function($msj) use($subject,$for){
            $msj->from("josedeodanes55@outlook.com","Technoly BOX");
            $msj->subject($subject);
            $msj->to($for);
        });
    }
}
