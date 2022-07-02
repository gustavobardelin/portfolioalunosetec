<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class CursoController extends Controller
{

    public function index($curso){

        if($curso == "1administracao"){
            $alunos = Admin::where("curso_id", "1")->orderBy('name')->get();

        }elseif($curso == "1contabilidade"){
            $alunos = Admin::where("curso_id", "2")->orderBy('name')->get();

        }elseif($curso == "1informatica"){
            $alunos = Admin::where("curso_id", "3")->orderBy('name')->get();

        }elseif($curso == "1mecanica"){
            $alunos = Admin::where("curso_id", "4")->orderBy('name')->get();

        }elseif($curso == "1quimica"){
            $alunos = Admin::where("curso_id", "5")->orderBy('name')->get();

        }elseif($curso == "3informatica"){
            $alunos = Admin::where("curso_id", "6")->orderBy('name')->get();

        }

        return view('cursos.'.$curso, ['alunos' => $alunos]);
    }
}
