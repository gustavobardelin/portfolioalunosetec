<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class CursoController extends Controller
{

    public function index($curso){

        $alunos = Admin::orderBy('name')->get();

        return view('cursos.'.$curso, ['alunos' => $alunos]);
    }
}
