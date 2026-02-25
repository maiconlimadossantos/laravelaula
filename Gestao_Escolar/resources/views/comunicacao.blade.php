@extends('layouts.app')

@section('title', 'Comunicação Escolar')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4 text-blue-800">Comunicação Escolar</h3>
        <p class="text-gray-700 mb-4">Facilite a comunicação entre professores, alunos e pais com nosso sistema integrado de mensagens e notificações.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-4 rounded-lg">
                <h4 class="font-bold text-gray-600 mb-2">Mensagens Recentes</h4>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Ricardo Lima: "Lembrete da prova de matemática na próxima semana."</li>
                    <li>Mariana Silva: "Reunião de pais marcada para sexta-feira."</li>
                </ul>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <h4 class="font-bold text-gray-600 mb-2">Notificações</h4>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Nova mensagem de Ana Souza</li>
                    <li>Avaliação de João Pedro disponível</li>
                </ul>
            </div>
        </div>
    </div>