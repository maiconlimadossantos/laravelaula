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

</body>
</html>