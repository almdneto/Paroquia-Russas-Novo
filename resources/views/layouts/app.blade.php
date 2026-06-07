<!DOCTYPE html>
<html class="light" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('title') - Paróquia Nossa Senhora do Rosário</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
</head>

<body class="bg-background font-body-md text-on-surface flex min-h-screen">

    {{-- Sidebar --}}
    <x-sidebar />

    {{-- Conteúdo principal --}}
    <main class="flex-1 flex flex-col min-w-0">

        {{-- Header --}}
        <x-header />

        {{-- Conteúdo da página --}}
        <div class="p-xl max-w-max-content-width w-full mx-auto space-y-xl">
            @if (session('success'))
                <div class="rounded-lg border border-green-200 bg-green-50 px-md py-sm text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="rounded-lg border border-red-200 bg-red-50 px-md py-sm text-sm text-red-700">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="rounded-lg border border-red-200 bg-red-50 px-md py-sm text-sm text-red-700">
                    <ul class="list-disc pl-lg">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>

        {{-- Footer --}}
        <footer class="mt-auto px-xl py-lg text-center text-caption font-caption text-on-surface-variant/60">
            © 2026 Paróquia Nossa Senhora do Rosário. Desenvolvido para a comunidade.
        </footer>

    </main>

    @stack('scripts')

</body>

</html>
