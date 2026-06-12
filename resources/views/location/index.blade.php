@extends('layouts.app')

@section('title', 'Gestão das Igrejas')

@section('content')
    <!-- Main Content Area -->
    <section class="p-lg md:p-3xl max-w-full w-full mx-auto animate-in fade-in duration-700">
        <!-- Header Action Row -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-md mb-2xl">
            <div>
                <h3 class="font-headline-md text-headline-md text-on-background">Gestão de Igrejas</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Visualize e gerencie as paróquias, capelas e comunidades pastorais.</p>
            </div>
            <a href="{{ route('location.create') }}"
                class="flex items-center gap-sm bg-primary text-on-primary px-lg py-md rounded-xl font-label-md text-label-md shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                Nova Igreja
            </a>
        </div>
        <!-- Table Section -->
        <div class="glass-card rounded-xl overflow-hidden">
            <div
                class="bg-surface shadow-[0_4px_20px_rgba(21,128,61,0.05)] border border-outline-variant/20 rounded-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant/30">
                                <th class="px-lg py-md font-label-md">Nome</th>
                                <th class="px-lg py-md font-label-md">Descrição</th>
                                <th class="px-lg py-md font-label-md text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/20">
                            @foreach ($locations as $location)
                                <!-- Location Row 1 -->
                                <tr class="hover:bg-surface-bright transition-colors group">
                                    <td class="px-lg py-md">
                                        <div class="flex items-center gap-md">
                                            <div
                                                class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold">
                                                {{ substr($location->name, 0, 2) }}
                                            </div>
                                            <div>
                                                <p class="font-title-lg text-body-md text-on-surface">{{ $location->name }}</p>
                                                <p class="text-caption text-on-surface-variant">{{ $location->address }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant font-body-md">{{ $location->description }}</td>
                                    <td class="px-lg py-md text-right">
                                        <div
                                            class="flex justify-end gap-sm opacity-60 group-hover:opacity-100 transition-opacity">
                                            <a href="{{ route('location.edit', $location->id) }}"
                                                class="p-xs hover:bg-surface-container rounded-lg text-primary" title="Editar">
                                                <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                            </a>
                                            <form action="{{ route('location.destroy', $location->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="p-xs cursor-pointer hover:bg-error-container rounded-lg text-error"
                                                    title="Excluir">
                                                    <span class="material-symbols-outlined text-[20px]"
                                                        data-icon="delete">delete</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination / Footer -->
                <div
                    class="px-lg py-md bg-surface-container-lowest border-t border-outline-variant/30 flex flex-col gap-md sm:flex-row sm:items-center sm:justify-between">
                    <span class="text-caption font-caption text-on-surface-variant">
                        @if ($locations->total() > 0)
                            Mostrando {{ $locations->firstItem() }} a {{ $locations->lastItem() }} de {{ $locations->total() }} localizações
                        @else
                            Nenhuma localização encontrada
                        @endif
                    </span>
                    <div class="flex items-center gap-sm">
                        @if ($locations->onFirstPage())
                            <span class="p-xs text-on-surface-variant rounded opacity-30 cursor-not-allowed"
                                aria-disabled="true">
                                <span class="material-symbols-outlined">chevron_left</span>
                            </span>
                        @else
                            <a class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors"
                                href="{{ $locations->previousPageUrl() }}" aria-label="Página anterior">
                                <span class="material-symbols-outlined">chevron_left</span>
                            </a>
                        @endif

                        @foreach ($locations->getUrlRange(1, $locations->lastPage()) as $page => $url)
                            @if ($page === $locations->currentPage())
                                <span
                                    class="min-w-8 h-8 px-sm inline-flex items-center justify-center rounded bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold">
                                    {{ $page }}
                                </span>
                            @else
                                <a class="min-w-8 h-8 px-sm inline-flex items-center justify-center rounded text-on-surface-variant hover:bg-surface-container-low transition-colors font-label-md text-label-md"
                                    href="{{ $url }}" aria-label="Ir para página {{ $page }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach

                        @if ($locations->hasMorePages())
                            <a class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors"
                                href="{{ $locations->nextPageUrl() }}" aria-label="Próxima página">
                                <span class="material-symbols-outlined">chevron_right</span>
                            </a>
                        @else
                            <span class="p-xs text-on-surface-variant rounded opacity-30 cursor-not-allowed"
                                aria-disabled="true">
                                <span class="material-symbols-outlined">chevron_right</span>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Devotional Card - Float Bottom Right -->
    
    <!-- Mobile Navigation (Bottom Bar) -->
    <div
        class="md:hidden fixed bottom-0 left-0 right-0 bg-surface border-t border-outline-variant/30 flex justify-around p-sm z-50">
        <a class="flex flex-col items-center gap-xs p-xs text-on-surface-variant" href="#">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="text-[10px] font-label-md">Início</span>
        </a>
        <a class="flex flex-col items-center gap-xs p-xs text-primary font-bold" href="#">
            <span class="material-symbols-outlined" data-icon="church"
                style="font-variation-settings: 'FILL' 1;">church</span>
            <span class="text-[10px] font-label-md">Igrejas</span>
        </a>
        <a class="flex flex-col items-center gap-xs p-xs text-on-surface-variant" href="#">
            <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
            <span class="text-[10px] font-label-md">Padres</span>
        </a>
        <a class="flex flex-col items-center gap-xs p-xs text-on-surface-variant" href="#">
            <span class="material-symbols-outlined" data-icon="schedule">schedule</span>
            <span class="text-[10px] font-label-md">Horas</span>
        </a>
    </div>
    <script>
        // Micro-interactions and simple UI logic
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('click', (e) => {
                if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'SPAN') {
                    // Logic for selecting a row or opening details
                    console.log('Row clicked');
                }
            });
        });

        // Search highlight logic (Visual only)
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                const text = row.innerText.toLowerCase();
                row.style.display = text.includes(term) ? '' : 'none';
            });
        });
    </script>
@endsection