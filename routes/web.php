<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/acesso', function () {    
    return view('acesso');
})->name('acesso');

Route::get('/principal', function () {    
    return view('principal');
})->name('principal');

// Route::get('/agendamento', function () {    
//     return view('agendamento');
// })->name('agendamento');

Route::get('/historico', function () {    
    return view('historico');
})->name('historico');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuario', [App\Http\Controllers\Usuario::class, 'index'])->name('usuario');

Route::post('/cadastro',[App\Http\Controllers\UsuarioController::class, 'create'])->name('create');

Route::get('/historico', [App\Http\Controllers\UsuarioController::class, 'historico'])->name('listar');


// criar rotas para historico do crud //
Route::get('/historico/{id}', [App\Http\Controllers\UsuarioController::class, 'mostrar'])->name('historico.mostrar');
Route::get('/historico/{id}/editar', [App\Http\Controllers\UsuarioController::class, 'editar'])->name('historico.editar');
Route::put('/historico/{id}', [App\Http\Controllers\UsuarioController::class, 'atualizar'])->name('historico.atualizar');
Route::delete('/historico/{id}',[App\Http\Controllers\UsuarioController::class, 'excluir'])->name('excluir');
Route::post('/usuarios/excluir', [UsuarioController::class, 'excluirItensSelecionados'])->name('usuarios.excluir');

// login //
Route::post('/usuario', [App\Http\Controllers\UsuarioController::class, 'login'])->name('fazer.login');






