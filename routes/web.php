<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){

    Route::prefix('tarefa')->group(function(){
        Route::get('/' , [TarefaController::class , 'index'])->name('app.tarefa.index');
        Route::get('/create' , [TarefaController::class , 'create'])->name('app.tarefa.create');
        Route::post('/create' , [TarefaController::class , 'store'])->name('app.tarefa.store');
        Route::get('/edit/{id}' , [TarefaController::class , 'edit'])->name('app.tarefa.edit');
        Route::put('/edit/{id}' , [TarefaController::class , 'update'])->name('app.tarefa.update');
        Route::delete('/delete', [TarefaController::class , 'destroy'])->name('app.tarefa.destroy');
    });


});
