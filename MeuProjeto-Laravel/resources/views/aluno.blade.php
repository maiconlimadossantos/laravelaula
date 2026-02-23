
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão de aluno</title>
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
                    <li><a href="{{ route('alunoindex') }}">Aluno</a></li>
                    <li><a href="{{ route('escolaindex') }}">Escola</a></li>
                    <li><a href="{{ route('professorindex') }}">Professor</a></li>
                    <li><a href="{{route('turmaindex')}}">Turma</a></li>
                    <li><a href="{{ route('cursoindex') }}">Curso</a></li>
                </ul>
            </ul>
        </nav>
    </header>

    <main>
    <h2>Cadastrar Novo Aluno</h2>
    <form action="{{route('alunostore')}}" method="POST">
        @csrf
        <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" pattern="[A-Za-zÀ-ÿ\s]+" title="O nome deve conter apenas letras e espaços" required>
        </div>
        <div>
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" pattern="[A-Za-zÀ-ÿ\s]+" title="O sobrenome deve conter apenas letras e espaços" required>
        </div>
        <div>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" min="1" max="120" required>
        </div>
        <div>
        <label for="data">Data de Nascimento</label>
        <input type="date" name="data" id="data">
        </div>
        <div>
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" id="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}" title="Formato esperado: 000.000.000-00" placeholder="000.000.000-00">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="exemplo@escola.com">
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" id="telefone" pattern="\(\d{2}\)\s\d{4,5}-\d{4}" title="Formato esperado: (00) 99999-9999" placeholder="(00) 00000-0000">
        </div>
        <div>
            <label for="matricula">Matricula:</label>
            <input type="number" name="matricula" id="matricula" pattern="\d+" title="A matrícula deve conter apenas números." placeholder="123456" required>
        </div>
        <button type="submit">Salvar Aluno</button>
    </form>
    </main>
    <br><br>


</body>
</html>