<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;

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
    return view('welcome');
});

Route::prefix('alunos')->group(function(){
    Route::get('/',[AlunoController::class,'index'])->name('alunos-index');
    Route::get('/create',[AlunoController::class,'create'])->name('alunos-create');
    Route::post('/',[AlunoController::class,'store'])->name('alunos-store');
    Route::get('/{id}/edit',[AlunoController::class,'edit'])->where('id','[0-9]+')->name('alunos-edit');
    Route::put('/{id}',[AlunoController::class,'update'])->where('id','[0-9]+')->name('alunos-update');
    Route::delete('/{id}',[AlunoController::class,'destroy'])->where('id','[0-9]+')->name('alunos-destroy');
 });

 Route::prefix('professores')->group(function(){
    Route::get('/',[ProfessorController::class,'index'])->name('professores-index'); 
 });
 Route::fallback(function(){
    return "Erro@";
 });
 
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
 Route::middleware([
     'auth:sanctum',
     config('jetstream.auth_session'),
     'verified'
 ])->group(function () {
     Route::get('/dashboard', function () {
         return view('dashboard');
     })->name('dashboard');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
