<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;

class MainController extends Controller
{

    function login(){

        return view("auth.login");

    }

    function register(){

        return view('auth.register');

    }

    function save(Request $request){

        //validate Request

        $request -> validate([

            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|max:32'

        ]);

        //insert into database

        $admin = new Admin;
        $admin -> email = $request -> email;
        $admin -> name = $request -> name;
        $admin -> curso_id = $request -> curso;
        $admin -> link = $request -> link;
        $admin -> password = Hash::make($request -> password);
        $save = $admin->save();

        if($save){

            return back()-> with('success', 'Aluno Cadastrado no Banco de Dados');

        }else{

            return back()->with('fail', 'Algo deu errado, tente novamente!');
        }

    }


    function check(Request $request){

        //validate request input

        $request -> validate([

            'email' => 'required|email',
            'password' => 'required|min:6|max:32'

        ]);

        $userInfo = Admin::where('email', '=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'Endereço de email não encontrado!');
        }else{

            if(Hash::check($request->password, $userInfo->password)){

                Auth::attempt(['email' => $request->email, 'password' => $request->password]);

                $request->session()->put('LoggedUser', $userInfo->id);


                return redirect('/');

            }else{
                return back()->with('fail', 'Senha Incorreta!');
            }

        }

    }

    function logout(){

        if(session()->has('LoggedUser')){

            session()->pull('LoggedUser');
            Auth::logout();

        }

        return redirect('/');
    }


}
