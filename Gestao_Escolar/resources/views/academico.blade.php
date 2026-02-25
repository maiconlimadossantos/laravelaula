@extends('layouts.app')

@section('title', 'Gestão Acadêmica')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4 text-blue-800">Visão Geral Acadêmica</h3>
        <p class="text-gray-700 mb-4">Gerencie turmas, alunos, professores e avaliações de forma eficiente.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-4 rounded-lg">
                <h4 class="font-bold text-gray-600 mb-2">Turmas Ativas</h4>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Turma A - 30 alunos</li>
                    <li>Turma B - 25 alunos</li>
                </ul>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <h4 class="font-bold text-gray-600 mb-2">Professores</h4>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Ricardo Lima - Matemática</li>
                    <li>Mariana Silva - Português</li>
                </ul>
            </div>
        </div>
    </div>

