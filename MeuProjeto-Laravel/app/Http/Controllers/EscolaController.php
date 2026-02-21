<?php

namespace App\Http\Controllers;



class EscolaController extends Controller
{
    public function Escolaindex()
    {
        return view('escola');
    }
    public function create_escola()
    {
        return view('escola');
    }
    public function store_escola()
    {
        // Lógica para armazenar os dados da escola
        // Você pode usar um modelo Eloquent para salvar os dados no banco de dados
        // Exemplo:
        // $escola = new Escola();
        // $escola->nome = request('nome');
        // $escola->endereco = request('endereco');
        // $escola->save();

        return redirect()->route('escola.index')->with('success', 'Escola criada com sucesso!');
    }
}
