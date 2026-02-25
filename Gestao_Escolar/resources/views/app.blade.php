<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Escolar - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <aside class="w-64 h-screen bg-slate-800 text-white p-5 sticky top-0">
        <h2 class="text-2xl font-bold mb-10 text-blue-400">Escola Digital</h2>

        <nav class="space-y-4">
            <a href="{{ route('dashboard') }}" class="block p-2 hover:bg-slate-700 rounded">Dashboard</a>

            <div class="pt-4 border-t border-slate-700">
                <p class="text-xs text-gray-400 uppercase mb-2">Administração</p>
                <a href="{{ route('financeiro.index') }}" class="block p-2 hover:bg-slate-700 rounded"> Financeiro</a>
                <a href="{{ route('recurso_humano.index') }}" class="block p-2 hover:bg-slate-700 rounded">Recursos Humanos</a>
                <a href="{{ route('academico.index') }}" class="block p-2 hover:bg-slate-700 rounded">Acadêmico</a>
                <a href="{{ route('infraestrutura.index') }}" class="block p-2 hover:bg-slate-700 rounded">Infraestrutura</a>
                <a href="{{ route('comunicacao.index') }}" class="block p-2 hover:bg-slate-700 rounded">Comunicação</a>
            </div>
        </nav>
    </aside>

    <main class="flex-1 p-10">
        <header class="mb-10">
            <h1 class="text-3xl font-bold text-gray-800">@yield('title')</h1>
        </header>

        @yield('content')
    </main>

</body>
</html>