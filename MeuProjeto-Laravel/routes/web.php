<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\CursoController;


Route::get('/', function () {
    return view('welcome');
});
//escola//
Route::get('/','App\Http\Controllers\escolaController@escolaindex')->name('escolaindex');
Route::get('/escola/create','App\Http\Controllers\escolaController@create_escola')->name('create_escola');
Route::post('/escola/store','App\Http\Controllers\escolaController@escolastore')->name('escolastore');
//aluno//
Route::get('/aluno','App\Http\Controllers\alunoController@alunoindex')->name('alunoindex');
Route::get('/aluno/create','App\Http\Controllers\alunoController@create_aluno')->name('create_aluno');
Route::post('/aluno/store','App\Http\Controllers\alunoController@alunostore')->name('alunostore');
//professor//
Route::get('/professor','App\Http\Controllers\professorController@professorindex')->name('professorindex');
Route::get('/turma','App\Http\Controllers\turmaController@turmaindex')->name('turmaindex');
Route::get('/curso','App\Http\Controllers\cursoController@cursoindex')->name('cursoindex');
