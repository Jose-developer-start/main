<?php

namespace App\Http\Controllers;

use App\Mail\SuscrytStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesSendController extends Controller
{
    public function index(){
        return view('mails.test');
    }
    public function contact(Request $request){
        $subject = "Validación de cuenta";

        $for = "servidorvps740@gmail.com";
        
        Mail::send('mails.email',$request->all(), function($msj) use($subject,$for){
            $msj->from("josedeodanes55@outlook.com","Supervisor @TECH STORE");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
    public function test(){
        return view('mails.emailSale');
    }
}
