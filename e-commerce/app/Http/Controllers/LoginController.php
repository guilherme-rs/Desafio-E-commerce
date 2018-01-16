<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function cliente(){
        $erro = false;
        return view ('login.clt_login', ['erro' => $erro]);
    }
    public function admin(){
        $erro = false;
        return view ('login.admin_login', ['erro' => $erro]);
    }

    public function validarCliente(Request $request){
        $cliente = Cliente::where('email', '=', Input::get('email'))->first();
        if(($cliente -> senha == Input::get('senha'))){
            return redirect()->route('index');
        }
        $erro = true;
        return view ('login.clt_login', ['erro' => $erro]);
    }

    public function validarAdmin(Request $request){
        $cliente = Cliente::where('email', '=', Input::get('email'))->first();
        if(($cliente -> senha == Input::get('senha'))){
            return view ('layouts.adm');
        }
        $erro = true;
        return view ('login.admin_login', ['erro' => $erro]);
    }
}
