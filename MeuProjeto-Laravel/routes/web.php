<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/alunos', [App\Http\Controllers\AlunoController::class, 'index'
]);
Route::get('/escola', [App\Http\Controllers\EscolaController::class, 'index'
]);
Route::get('/professores', [App\Http\Controllers\ProfessorController::class, 'index'
]);
Route::get('/turmas', [App\Http\Controllers\TurmaController::class, 'index'
]);
Route::get('/cursos', [App\Http\Controllers\CursoController::class, 'index'
]);
