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
Route::get('/','App\Http\Controllers\escolaController@escolaindex')->name('escolaindex');
//aluno//
Route::get('/aluno','App\Http\Controllers\alunoController@alunoindex')->name('alunoindex');
Route::get('/aluno/create','App\Http\Controllers\alunoController@create_aluno')->name('create_aluno');
Route::post('/aluno/store','App\Http\Controllers\alunoController@alunostore')->name('alunostore');
//professor//
Route::get('/professor','App\Http\Controllers\professorController@professorindex')->name('professorindex');
Route::get('/turma','App\Http\Controllers\turmaController@turmaindex')->name('turmaindex');
Route::get('/curso','App\Http\Controllers\cursoController@cursoindex')->name('cursoindex');
