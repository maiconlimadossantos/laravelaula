@extends('layouts.app')

@section('title', 'Departamento Financeiro')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
            <h3 class="font-bold text-gray-600">Receita do Mês</h3>
            <p class="text-2xl text-green-600">R$ 45.000,00</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-red-500">
            <h3 class="font-bold text-gray-600">Contas a Pagar</h3>
            <p class="text-2xl text-red-600">R$ 12.300,00</p>
        </div>
    </div>
@endsection
