<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessaoController;

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

Route::get('/', [SessaoController::class, 'index'])->name("home");
Route::post('/adicionarSessao', [SessaoController::class, 'adicionarPost'])->name("adicionarPost");
Route::get('/deletarSessao/{id}', [SessaoController::class, 'deletar'])->name("deletar");
Route::get('/atualizarSessao/{id}', [SessaoController::class, 'atualizar'])->name("atualizar");
