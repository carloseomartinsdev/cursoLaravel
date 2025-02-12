<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobreNos', [\App\Http\Controllers\sobreNosController::class,'sobreNos'])->name('site.sobreNos');
Route::get('/contato', [\App\Http\Controllers\contatoController::class,'contato'])->name('site.contato');
Route::get('/login', function (){ return 'login'; })->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function (){ return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos', function (){ return 'produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\testeController::class,'teste'])->name('teste');





Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'. route('site.index') . '"> Ir para inicio</a>';
});