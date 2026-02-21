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
    public function escolastore()
    {
        request()->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
        ]);

        return redirect()->route('escola.index')->with('success', 'Escola criada com sucesso!');
    }
}
