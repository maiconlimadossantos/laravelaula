<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Escolar - Gestão</title>
    <style>
        /* Um toque de estilo para o menu não ficar bagunçado */
        body { font-family: sans-serif; margin: 0; background-color: #f4f4f9; }
        nav { background-color: #333; padding: 1rem; }
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; gap: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ffca28; }
        .container { padding: 20px; }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <ul>
                    <li><a href="{{ route('escolaindex') }}">Escola</a></li>
                    <li><a href="{{ route('professorindex') }}">Professor</a></li>
                    <li><a href="{{route('turmaindex')}}">Turma</a></li>
                    <li><a href="{{ route('cursoindex') }}">Curso</a></li>
                    <li><a href="{{ route('alunoindex') }}">Aluno</a></li>
                </ul>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h2>Cadastrar Unidade Escolar</h2>

        <form action="{{ route('escolastore') }}" method="POST">
            @csrf
            <div class="form-grid">
                <div class="form-group full-width">
                    <label for="nome">Nome da Instituição</label>
                    <input type="text" name="nome" id="nome" placeholder="Ex: Escola Técnica Estadual" required>
                </div>

                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj" placeholder="00.000.000/0000-00">
                </div>

                <div class="form-group">
                    <label for="diretor">Nome do Diretor</label>
                    <input type="text" name="diretor" id="diretor" >
                </div>

                <div class="form-group full-width">
                    <label for="endereco">Endereço Completo</label>
                    <input type="text" name="endereco" id="endereco">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone para Contato</label>
                    <input type="text" name="telefone" id="telefone">
                </div>
            </div>
            <button type="submit">Salvar Escola</button>
        </form>

        <hr>

        <h2>Escolas Cadastradas</h2>
        <p><small>Exemplo de <strong>interação com URL</strong> (Requisito do projeto):</small></p>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Escola Central</td>
                    <td>Camaquã</td>
                    <td>
                        <a href="/escola/editar/1" class="btn-edit">Editar ID: 1</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

</body>
</html>