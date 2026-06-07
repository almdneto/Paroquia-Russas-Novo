@extends('layouts.app')

@section('title', 'Criar Usuário')

@section('content')
<!-- Main Content Canvas -->
<div class="p-xl flex-grow flex flex-col items-center gap-xl overflow-y-auto">
    <div class="w-full max-w-content-width">
        <div class="mb-xl">
            <p class="font-body-lg text-body-lg text-on-surface-variant">Preencha os dados abaixo para realizar
                o cadastro do novo colaborador ou administrador da paróquia.</p>
        </div>
        <!-- Form Section (Bento Inspired Grid) -->
        <form class="grid grid-cols-1 md:grid-cols-12 gap-lg" action="{{ route('users.store') }}" method="POST">
            @csrf
            <!-- Basic Info Card -->
            <div
                class="md:col-span-8 bg-surface-container-lowest p-xl rounded-xl border border-outline-variant/20 shadow-soft">
                <div class="flex items-center gap-sm mb-lg border-b border-outline-variant/20 pb-sm">
                    <span class="material-symbols-outlined text-secondary" data-icon="badge">badge</span>
                    <h3 class="font-title-lg text-title-lg text-primary">Informações Básicas</h3>
                </div>
                <div class="grid grid-cols-1 gap-lg">
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="nome">Nome
                            Completo</label>
                        <input
                            class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none"
                            id="nome" name="name" placeholder="Ex: João da Silva" type="text" value="{{ old('name') }}"
                            required />
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="email">E-mail
                            Profissional</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline-variant"
                                data-icon="mail">mail</span>
                            <input
                                class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg pl-11 pr-md py-sm transition-all font-body-md text-body-md outline-none"
                                id="email" name="email" placeholder="joao@exemplo.com" type="email"
                                value="{{ old('email') }}" required />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Permissions & Status Card -->
            <div class="md:col-span-4 flex flex-col gap-lg">
                <div
                    class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant/20 shadow-soft flex-grow">
                    <div class="flex items-center gap-sm mb-md">
                        <span class="material-symbols-outlined text-secondary" data-icon="security">security</span>
                        <h3 class="font-title-lg text-title-lg text-primary">Configurações</h3>
                    </div>
                    <div class="flex flex-col gap-lg">
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface-variant" for="acesso">Nível de
                                Acesso</label>
                            <select
                                class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none appearance-none"
                                id="acesso" name="access_level" required>
                                <option value="0" @selected(old('access_level') == 0)>Usuário</option>
                                <option value="1" @selected(old('access_level') == 1)>Administrador</option>
                            </select>
                        </div>

                    </div>
                </div>
                <!-- Specialty Devotional Card Component -->
                <div
                    class="bg-primary-container p-lg rounded-xl border border-primary/20 shadow-soft relative overflow-hidden flex flex-col gap-sm">
                    <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-white/10 text-9xl"
                        data-icon="church">church</span>
                    <h4 class="font-headline-md text-headline-md text-on-primary-container font-display relative z-10">
                        Lembrete</h4>
                    <p class="font-body-md text-body-md text-on-primary-container/80 relative z-10 italic">"A
                        missão de evangelizar começa pela organização e cuidado com o próximo."</p>
                </div>
            </div>
            <!-- Security / Password Card -->
            <div
                class="md:col-span-12 bg-surface-container-lowest p-xl rounded-xl border border-outline-variant/20 shadow-soft">
                <div class="flex items-center gap-sm mb-lg border-b border-outline-variant/20 pb-sm">
                    <span class="material-symbols-outlined text-secondary" data-icon="key">key</span>
                    <h3 class="font-title-lg text-title-lg text-primary">Segurança</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-xl">
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="senha">Senha
                            Temporária</label>
                        <div class="relative">
                            <input
                                class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none"
                                id="senha" name="password" placeholder="••••••••" type="password" required />
                            <button
                                class="absolute right-md top-1/2 -translate-y-1/2 text-outline-variant hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                            </button>
                        </div>
                        <p class="font-caption text-caption text-on-surface-variant/70 mt-xs">Mínimo de 6
                            caracteres.</p>
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant"
                            for="confirmar_senha">Confirmar Senha</label>
                        <div class="relative">
                            <input
                                class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none"
                                id="confirmar_senha" name="password_confirmation" placeholder="••••••••"
                                type="password" required />
                            <button
                                class="absolute right-md top-1/2 -translate-y-1/2 text-outline-variant hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined" data-icon="visibility_off">visibility_off</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Actions -->
            <div class="md:col-span-12 flex justify-end items-center gap-lg mt-md">
                <a href="{{ route('users.index') }}"
                    class="px-xl py-md rounded-xl font-label-md text-label-md text-primary hover:bg-surface-container-high transition-all active:scale-95">
                    Cancelar
                </a>
                <button
                    class="px-xl py-md bg-primary cursor-pointer text-on-primary rounded-xl font-label-md text-label-md shadow-md hover:bg-surface-tint transition-all active:scale-95 flex items-center gap-sm"
                    type="submit">
                    <span class="material-symbols-outlined text-[20px]" data-icon="save">save</span>
                    Salvar Usuário
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    // Hover effect for form cards
    const cards = document.querySelectorAll('.shadow-soft');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-2px)';
            card.style.boxShadow = '0 8px 30px rgba(21, 128, 61, 0.1)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = '0 4px 20px rgba(21, 128, 61, 0.05)';
        });
        card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
    });
</script>
@endsection
