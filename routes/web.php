<?php

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () { return view('welcome');});


Route::get('tarefa/exportacao{extensao}', [TarefaController::class, 'exportacao'])->name('tarefa.exportacao');

Auth::routes(['verify'=>true]);

Route::middleware('verified')->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('verified')->resource('tarefa', TarefaController::class);

Route::get('mensagem-teste' , function (){
        return new MensagemTesteMail();
 //  Mail::to('diogovalente@hotmail.com.br')->send(new MensagemTesteMail());
   // return 'E-mail enviado com sucesso';
});

