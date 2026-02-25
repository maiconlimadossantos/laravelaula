@extends('layouts.app')

@section('title', 'Infraestrutura Escolar')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4 text-blue-800">Gerenciamento de Infraestrutura</h3>
        <p class="text-gray-700 mb-4">Monitore e gerencie os recursos físicos da escola, como salas de aula, equipamentos e manutenção.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-4 rounded-lg">
                <h4 class="font-bold text-gray-600 mb-2">Salas de Aula</h4>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Sala 101 - Capacidade: 30 alunos</li>
                    <li>Sala 102 - Capacidade: 25 alunos</li>
                </ul>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <h4 class="font-bold text-gray-600 mb-2">Equipamentos</h4>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Projetor - Sala 101</li>
                    <li>Computadores - Laboratório de Informática</li>
                </ul>
            </div>
        </div>
    </div>
