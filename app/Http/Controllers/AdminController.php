<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    public function index(){

        $alunos = Admin::orderBy('name', 'asc')->get();

        return view('admin.dashboard', ['alunos' => $alunos]);
    }


    public function edit($id){

        $aluno = Admin::findOrFail($id);

        return view('admin.update', ["aluno" => $aluno]);

    }

    public function update(Request $request){

        Admin::findOrFail($request->id)->update([
            'name' => $request-> name,
            'email' => $request-> email,
            'link' => $request-> link,
            'admin' => $request-> admin,
            'curso_id' => $request-> curso_id
        ]);


        if($request->confirm_password == 1){
            Admin::findOrFail($request->id)->update([
                'password' => Hash::make($request -> password)
            ]);
        }

        return redirect('/admin/dashboard');
    }

    public function destroy($id){

        Admin::findOrFail($id)->delete();

        return back();

    }

    public function import(Request $request)
    {

        $mensagens = [
            'required' => 'O campo ":attribute" é obrigatório!',
            'file.mimes' => 'Insira um arquivo ".xlsx" !'
        ];

        $request -> validate([
            'file' => 'required|mimes:xlsx'
        ], $mensagens);


        $file = $request->file('file')->store('import');

        $import = new UsersImport;
        $import->import($file);


        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

        return back()->withStatus('Todos os alunos foram importados com sucesso!');

    }

    public function export()
    {
        return Excel::download(new UsersExport, 'alunos.xlsx');

    }


}
