<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AppController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function financeiroIndex()
    {
        return view('financeiro.index');
    }

    public function financeiroFluxo()
    {
        return view('financeiro.fluxo');
    }

    public function financeiroMensalidades()
    {
        return view('financeiro.mensalidades');
    }

    public function rhIndex()
    {
        return view('rh.index');
    }

    public function rhFuncionarios()
    {
        return view('rh.funcionarios');
    }

    public function rhFolha()
    {
        return view('rh.folha');
    }

    public function academicoIndex()
    {
        return view('academico.index');
    }

    public function academicoCursos()
    {
        return view('academico.cursos');
    }

    public function academicoAlunos()
    {
        return view('academico.alunos');
    }

    public function academicoProfessores()
    {
        return view('academico.professores');
    }

    public function infraestruturaIndex()
    {
        return view('infraestrutura.index');
    }

    public function infraestruturaManutencao()
    {
        return view('infraestrutura.manutencao');
    }

    public function infraestruturaEquipamentos()
    {
        return view('infraestrutura.equipamentos');
    }

    public function comunicacaoIndex()
    {
        return view('comunicacao.index');
    }

    public function comunicacaoNoticias()
    {
        return view('comunicacao.noticias');
    }

    public function comunicacaoEventos()
    {
        return view('comunicacao.eventos');
    }
}
