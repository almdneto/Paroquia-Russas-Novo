@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
<!-- Page Canvas -->
<div class="p-xl max-w-max-content-width w-full mx-auto space-y-xl">
    <!-- Header Section -->
    <section class="flex flex-col md:flex-row justify-between items-start md:items-center gap-md">
        <div>
            <h3 class="font-headline-md text-headline-md text-on-surface">Usuários</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Gerenciamento de acessos ao sistema
                paroquial.</p>
        </div>
        <a href="{{ route('users.create') }}"
            class="flex items-center gap-sm bg-primary cursor-pointer text-on-primary px-lg py-md rounded-xl font-label-md text-label-md hover:opacity-90 transition-all shadow-md active:scale-95">
            <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
            Novo Usuário
        </a>
    </section>
    <!-- Table Container -->
    <section class="glass-card rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant/30">
                        <th class="px-lg py-md font-label-md text-label-md">Nome</th>
                        <th class="px-lg py-md font-label-md text-label-md">E-mail</th>
                        <th class="px-lg py-md font-label-md text-label-md">Nível de acesso</th>
                        <th class="px-lg py-md font-label-md text-label-md text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20">
                    @foreach ($users as $user)
                        <tr class="hover:bg-surface-container-lowest transition-colors group">
                            <td class="px-lg py-md">
                                <div class="flex items-center gap-md">
                                    <span
                                        class="font-body-md text-body-md text-on-surface font-medium">{{ $user->id }}</span>
                                    <span
                                        class="font-body-md text-body-md text-on-surface font-medium">{{ $user->name }}</span>
                                </div>
                            </td>
                            <td class="px-lg py-md text-on-surface-variant font-body-md text-body-md">
                                {{ $user->email }}
                            </td>
                            <td class="px-lg py-md">
                                <span
                                    class="px-sm py-xs bg-secondary-container/30 text-on-secondary-container rounded-full text-caption font-caption font-semibold uppercase tracking-wider">
                                    {{ $user->access_level === 1 ? 'Administrador' : 'Usuário' }}
                                </span>
                            </td>
                            <td class="px-lg py-md text-right">
                                <div class="flex items-center justify-end gap-sm">
                                    <a class="p-xs text-on-surface-variant hover:text-primary transition-colors"
                                        title="Editar" href="{{ route('users.edit', $user->id) }}">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="p-xs cursor-pointer text-on-surface-variant hover:text-error transition-colors"
                                            onclick="return confirm('Tem certeza que deseja excluir este usuário?')"
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
        <!-- Pagination -->
        <div
            class="px-lg py-md bg-surface-container-lowest border-t border-outline-variant/30 flex flex-col gap-md sm:flex-row sm:items-center sm:justify-between">
            <span class="text-caption font-caption text-on-surface-variant">
                @if ($users->total() > 0)
                    Mostrando {{ $users->firstItem() }} a {{ $users->lastItem() }} de {{ $users->total() }} usuários
                @else
                    Nenhum usuário encontrado
                @endif
            </span>
            <div class="flex items-center gap-sm">
                @if ($users->onFirstPage())
                    <span class="p-xs text-on-surface-variant rounded opacity-30 cursor-not-allowed" aria-disabled="true">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </span>
                @else
                    <a class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors"
                        href="{{ $users->previousPageUrl() }}" aria-label="Página anterior">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </a>
                @endif

                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                    @if ($page === $users->currentPage())
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

                @if ($users->hasMorePages())
                    <a class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors"
                        href="{{ $users->nextPageUrl() }}" aria-label="Próxima página">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </a>
                @else
                    <span class="p-xs text-on-surface-variant rounded opacity-30 cursor-not-allowed" aria-disabled="true">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </span>
                @endif
            </div>
        </div>
    </section>
    <!-- Devotional Contextual Card (Bento Style) -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
        <div
            class="lg:col-span-2 glass-card p-lg rounded-xl flex flex-col justify-center relative overflow-hidden group min-w-0">
            <div
                class="absolute -right-8 -bottom-8 opacity-5 text-primary transform group-hover:scale-110 transition-transform duration-500">
                <span class="material-symbols-outlined text-[160px]" data-icon="church">church</span>
            </div>
            <h4 class="font-headline-md text-headline-md text-primary mb-sm relative z-10">Conselho Paroquial</h4>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl relative z-10">
                Lembre-se que o acesso administrativo deve ser concedido apenas a membros ativos do conselho e
                funcionários autorizados pela secretaria paroquial.
            </p>
        </div>
        <div
            class="bg-primary text-on-primary p-lg rounded-xl flex flex-col justify-between shadow-lg relative overflow-hidden min-w-0">
            <div class="z-10">
                <span class="material-symbols-outlined mb-md block text-[32px]" data-icon="security">security</span>
                <h4 class="font-title-lg text-title-lg mb-xs">Segurança de Dados</h4>
                <p class="text-caption font-caption text-on-primary">Auditoria de acessos realizada
                    semanalmente.</p>
            </div>
            <a class="mt-lg font-label-md text-label-md underline underline-offset-4 z-10 hover:opacity-80" href="#">Ver
                logs de acesso</a>
            <div class="absolute top-0 right-0 p-4 opacity-10">
                <span class="material-symbols-outlined text-[64px]" data-icon="lock_open">lock_open</span>
            </div>
        </div>
    </section>
</div>
<!-- Micro-interaction Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Add subtle ripple-like effect to buttons
        const buttons = document.querySelectorAll('button');
        buttons.forEach(btn => {
            btn.addEventListener('mousedown', function () {
                this.style.transform = 'scale(0.96)';
            });
            btn.addEventListener('mouseup', function () {
                this.style.transform = 'scale(1)';
            });
            btn.addEventListener('mouseleave', function () {
                this.style.transform = 'scale(1)';
            });
        });

        // Smooth fade-in for table rows
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach((row, index) => {
            row.style.opacity = '0';
            row.style.transform = 'translateY(10px)';
            setTimeout(() => {
                row.style.transition = 'all 0.4s ease-out';
                row.style.opacity = '1';
                row.style.transform = 'translateY(0)';
            }, 100 * index);
        });
    });
</script>
@endsection
