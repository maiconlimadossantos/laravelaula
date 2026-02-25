@extends('layouts.app')

@section('title', 'Recursos Humanos')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4 text-blue-800">Lista de Colaboradores</h3>
        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="py-2">Nome</th>
                    <th>Cargo</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2">Ana Souza</td>
                    <td>Diretora</td>
                    <td><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Ativo</span></td>
                </tr>
                <tr>
                    <td class="py-2">Ricardo Lima</td>
                    <td>Professor (Matemática)</td>
                    <td><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Ativo</span></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection