<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Auth;

class AlunoController extends Controller
{

    public function index(){


        $aluno = Admin::findOrFail(Auth::user()->id);

        return view('aluno.dashboard', ["aluno" => $aluno]);

    }

    public function update(Request $request){

        Admin::findOrFail($request->id)->update([
            'name' => $request-> name,
            'email' => $request-> email,
            'link' => $request-> link
        ]);


        if($request->confirm_password == 1){
            Admin::findOrFail($request->id)->update([
                'password' => Hash::make($request -> password)
            ]);
        }

        return redirect('/aluno/dashboard');
    }


}
