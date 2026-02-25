<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Dashboard Principal
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Departamento Financeiro
Route::prefix('financeiro')->name('financeiro.')->group(function () {
    Route::get('/', function () { return view('financeiro.index'); })->name('index');
    Route::get('/fluxo-caixa', function () { return view('financeiro.fluxo'); })->name('fluxo');
    Route::get('/mensalidades', function () { return view('financeiro.mensalidades'); })->name('mensalidades');
});

// Departamento de Recursos Humanos (RH)
Route::prefix('rh')->name('rh.')->group(function () {
    Route::get('/', function () { return view('rh.index'); })->name('index');
    Route::get('/funcionarios', function () { return view('rh.funcionarios'); })->name('funcionarios');
    Route::get('/folha-pagamento', function () { return view('rh.folha'); })->name('folha');
});

// Departamento Acadêmico
Route::prefix('academico')->name('academico.')->group(function () {
    Route::get('/', function () { return view('academico.index'); })->name('index');
    Route::get('/cursos', function () { return view('academico.cursos'); })->name('cursos');
    Route::get('/alunos', function () { return view('academico.alunos'); })->name('alunos');
    Route::get('/professores', function () { return view('academico.professores'); })->name('professores');
});

// Departamento de infraestrutura
Route::prefix('infraestrutura')->name('infraestrutura.')->group(function () {
    Route::get('/', function () { return view('infraestrutura.index'); })->name('index');
    Route::get('/manutencao', function () { return view('infraestrutura.manutencao'); })->name('manutencao');
    Route::get('/equipamentos', function () { return view('infraestrutura.equipamentos'); })->name('equipamentos');
});

// Departamento de comunicação
Route::prefix('comunicacao')->name('comunicacao.')->group(function () {
    Route::get('/', function () { return view('comunicacao.index'); })->name('index');
    Route::get('/noticias', function () { return view('comunicacao.noticias'); })->name('noticias');
    Route::get('/eventos', function () { return view('comunicacao.eventos'); })->name('eventos');
});
