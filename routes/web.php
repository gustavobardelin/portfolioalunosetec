<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');


Route::group(['middleware'=>['AuthCheck']], function(){

    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');

    Route::get('/admin/settings', [MainController::class, 'settings']);
    Route::get('/admin/profile', [MainController::class, 'profile']);
    Route::get('/admin/staff', [MainController::class, 'staff']);

});


Route::get('/cursos/{curso}', [CursoController::class, 'index']);


Route::group(['middleware'=>['AdminAccess']], function(){

    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/dashboard/{id}/edit', [AdminController::class, 'edit']);
    Route::put('/admin/dashboard/{id}/update', [AdminController::class, 'update']);

    Route::delete('/admin/dashboard/{id}/delete', [AdminController::class, 'destroy']);


    Route::post('/admin/dashboard/import/alunos', [AdminController::class, 'import'])->name('admin.import');
    Route::get('/admin/dashboard/export/alunos', [AdminController::class, 'export'])->name('admin.import');

});

Route::group(['middleware'=>['AlunoAccess']], function(){

    Route::get('/aluno/dashboard', [AlunoController::class, 'index'])->name('aluno.dashboard');


    Route::get('/aluno/dashboard/edit', [AlunoController::class, 'edit']);
    Route::put('/aluno/dashboard/{id}/update', [AlunoController::class, 'update']);

});
