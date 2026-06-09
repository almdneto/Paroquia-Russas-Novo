@extends('layouts.app')

@section('title', 'Gestão de Clero')

@section('content')
    <!-- Content Area -->
    <section class="p-xl max-w-max-content-width mx-auto w-full">
        <!-- Action Row -->
        <div class="flex justify-between items-end mb-xl">
            <div class="space-y-1">
                <h3 class="font-headline-md text-headline-md text-on-surface">Gestão de Clero</h3>
                <p class="text-on-surface-variant">Visualize e gerencie as informações dos sacerdotes da paróquia.
                </p>
            </div>
            <a href="{{ route('priests.create') }}"
                class="bg-primary text-on-primary px-lg py-sm rounded-xl flex items-center gap-sm font-label-md hover:opacity-90 transition-all active:scale-95">
                <span class="material-symbols-outlined text-[20px]" data-icon="add">add</span>
                Novo Padre
            </a>
        </div>
        <!-- Bento Layout / Main Table Card -->
        <div
            class="bg-surface shadow-[0_4px_20px_rgba(21,128,61,0.05)] border border-outline-variant/20 rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant/30">
                            <th class="px-lg py-md font-label-md">Nome</th>
                            <th class="px-lg py-md font-label-md">Telefone</th>
                            <th class="px-lg py-md font-label-md text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/20">
                        @foreach ($priests as $priest)
                            <!-- Priest Row 1 -->
                            <tr class="hover:bg-surface-bright transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold">
                                            {{ substr($priest->name, 0, 2) }}
                                        </div>
                                        <div>
                                            <p class="font-title-lg text-body-md text-on-surface">{{ $priest->name }}</p>
                                            <p class="text-caption text-on-surface-variant">{{ $priest->function }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md">{{ $priest->cellphone }}</td>
                                <td class="px-lg py-md text-right">
                                    <div class="flex justify-end gap-sm opacity-60 group-hover:opacity-100 transition-opacity">
                                        <button class="p-xs hover:bg-surface-container rounded-lg text-primary" title="Editar">
                                            <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded-lg text-error" title="Excluir">
                                            <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                        </button>
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
                    @if ($priests->total() > 0)
                        Mostrando {{ $priests->firstItem() }} a {{ $priests->lastItem() }} de {{ $priests->total() }} padres
                    @else
                        Nenhum sarcerdote encontrado
                    @endif
                </span>
                <div class="flex items-center gap-sm">
                    @if ($priests->onFirstPage())
                        <span class="p-xs text-on-surface-variant rounded opacity-30 cursor-not-allowed" aria-disabled="true">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </span>
                    @else
                        <a class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors"
                            href="{{ $priests->previousPageUrl() }}" aria-label="Página anterior">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </a>
                    @endif

                    @foreach ($priests->getUrlRange(1, $priests->lastPage()) as $page => $url)
                        @if ($page === $priests->currentPage())
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

                    @if ($priests->hasMorePages())
                        <a class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors"
                            href="{{ $priests->nextPageUrl() }}" aria-label="Próxima página">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </a>
                    @else
                        <span class="p-xs text-on-surface-variant rounded opacity-30 cursor-not-allowed" aria-disabled="true">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <!-- Devotional Card - Secondary Content -->
        <div class="mt-3xl grid grid-cols-1 md:grid-cols-2 gap-xl">
            <div
                class="bg-surface-container-lowest p-xl rounded-xl border border-primary/10 relative overflow-hidden group">
                <div
                    class="absolute -right-4 -bottom-4 opacity-5 pointer-events-none group-hover:scale-110 transition-transform duration-700">
                    <span class="material-symbols-outlined text-[160px]" data-icon="church">church</span>
                </div>
                <h4 class="font-headline-md text-primary mb-md relative z-10">Missão Sacerdotal</h4>
                <p class="text-body-md text-on-surface-variant italic relative z-10">
                    "O sacerdócio é o amor do Coração de Jesus. Quando vedes o padre, pensai em Nosso Senhor Jesus
                    Cristo."
                </p>
                <p class="text-caption text-primary mt-sm font-semibold relative z-10">— São João Maria Vianney</p>
            </div>
            <div class="bg-primary-container p-xl rounded-xl flex flex-col justify-between">
                <div>
                    <h4 class="font-headline-md text-on-primary-container mb-xs">Relatórios do Clero</h4>
                    <p class="text-on-primary-container/80 text-body-md">Gere relatórios detalhados de atividades e
                        histórico paroquial de cada sacerdote.</p>
                </div>
                <button
                    class="mt-lg w-fit px-md py-sm bg-on-primary-container text-primary-container rounded-lg font-label-md hover:bg-white transition-colors">
                    Gerar Documentos
                </button>
            </div>
        </div>
    </section>
    <script>
        // Simple click interaction for the 'Novo Padre' button
        document.querySelector('button')?.addEventListener('click', function () {
            this.classList.add('scale-95');
            setTimeout(() => this.classList.remove('scale-95'), 150);
        });

        // Add subtle hover effect to table rows
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.style.transform = 'translateX(4px)';
                row.style.transition = 'transform 0.3s ease';
            });
            row.addEventListener('mouseleave', () => {
                row.style.transform = 'translateX(0)';
            });
        });
    </script>
@endsection