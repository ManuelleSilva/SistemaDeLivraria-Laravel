<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrariaController;

Route::get('/',[LivrariaController::class,'MostrarHome'])->name('homeadm');

Route::get('/cadastro-livro',[LivrariaController::class,'MostrarCadastroLivro'])->name('show-cadastrolivros');
Route::get('/lista-livro',[LivrariaController::class,'MostrarLivroNome'])->name('lista-livro');
Route::get('/alterar-livro/{id}',[LivrariaController::class,'MostrarLivroCodigo'])->name('show-altera-livro');

Route::post('/cadastro-livro',[LivrariaController::class,'CadastroLivros'])->name('cadastra-livro');

Route::delete('/apaga-livro/{id}',[LivrariaController::class,'Destroy'])->name('apaga-livro');

Route::put('/altera-livro/{id}',[LivrariaController::class,'Update'])->name('altera-livro');
