<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function alunoindex()
    {
        return view('aluno');
    }
    public function create_aluno()
    {
        return view('aluno');
    }


    public function alunostore(Request $request)
    {

            $request->validate([
                'nome' => 'required',
                'email' => 'required|email',
                'telefone' => 'required',
            ]);

            return redirect()->route('alunoindex')->with('success', 'Aluno criado com sucesso!');
    }

}
