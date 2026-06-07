<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Cadastro - Paróquia Nossa Senhora do Rosário</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
</head>

<body class="bg-serene-gradient min-h-screen flex items-center justify-center font-body-md text-on-surface p-md">
    <!-- Auth Shell Suppression: Hide Sidebar and Top Nav for Transactional Flow -->
    <main class="w-full max-w-[720px] animate-in fade-in slide-in-from-bottom-4 duration-700">
        <!-- Devotional Card & Logo Section -->
        <div class="text-center mb-lg">
            <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-container mb-md shadow-lg shadow-primary-container/20">
                <span class="material-symbols-outlined text-on-primary-container text-[32px]">church</span>
            </div>
            <h1
                class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-xs">
                Seja Bem-vindo
            </h1>
            <p class="font-body-md text-on-surface-variant px-md italic">
                "Onde dois ou três estiverem reunidos em meu nome, ali eu estarei no meio deles."
            </p>
        </div>
        <!-- Registration Form Card -->
        <div
            class="glass-effect rounded-xl p-lg md:p-xl shadow-[0_4px_20px_rgba(21,128,61,0.05)] border border-outline-variant/30">
            <h2 class="font-headline-md text-headline-md text-on-surface mb-lg text-center">Criar Nova Conta</h2>
            <form action="{{ route('register') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-md md:gap-lg"
                id="registerForm">
                @csrf

                <!-- Nome Completo -->
                <div class="flex flex-col gap-xs md:col-span-2">
                    <label class="font-label-md text-label-md text-on-surface-variant ml-xs" for="name">Nome
                        Completo</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px] pointer-events-none">person</span>
                        <input
                            class="w-full pl-14 pr-md py-md rounded-xl bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary transition-all font-body-md outline-none"
                            id="name" name="name" placeholder="Seu nome completo" required type="text"
                            value="{{ old('name') }}" />
                    </div>
                    @error('name')
                        <p class="ml-xs text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <!-- E-mail -->
                <div class="flex flex-col gap-xs md:col-span-2">
                    <label class="font-label-md text-label-md text-on-surface-variant ml-xs" for="email">E-mail</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px] pointer-events-none">mail</span>
                        <input
                            class="w-full pl-14 pr-md py-md rounded-xl bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary transition-all font-body-md outline-none"
                            id="email" name="email" placeholder="exemplo@email.com" required type="email"
                            value="{{ old('email') }}" />
                    </div>
                    @error('email')
                        <p class="ml-xs text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Senha -->
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-on-surface-variant ml-xs"
                        for="password">Senha</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px] pointer-events-none">lock</span>
                        <input
                            class="w-full pl-14 pr-md py-md rounded-xl bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary transition-all font-body-md outline-none"
                            id="password" name="password" placeholder="Crie uma senha forte" required
                            type="password" />
                    </div>
                    @error('password')
                        <p class="ml-xs text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Confirmação de Senha -->
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-on-surface-variant ml-xs"
                        for="password_confirmation">Confirmar Senha</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px] pointer-events-none">verified_user</span>
                        <input
                            class="w-full pl-14 pr-md py-md rounded-xl bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary transition-all font-body-md outline-none"
                            id="password_confirmation" name="password_confirmation" placeholder="Repita sua senha" required
                            type="password" />
                    </div>
                    @error('password_confirmation')
                        <p class="ml-xs text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Submit Button -->
                <button
                    class="mt-md w-full bg-primary-container text-on-primary-container font-headline-md text-headline-md py-md rounded-xl hover:opacity-90 active:scale-[0.98] transition-all shadow-md flex items-center justify-center gap-sm md:col-span-2"
                    type="submit">
                    Cadastrar
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </form>
            <!-- Bottom Link -->
            <div class="mt-lg pt-lg border-t border-outline-variant/30 text-center">
                <p class="font-body-md text-on-surface-variant">
                    Já possui uma conta?
                    <a class="text-primary font-semibold hover:underline transition-all"
                        href="{{ route('login.form') }}">Entrar</a>
                </p>
            </div>
        </div>
        <!-- Parish Info Footer -->
        <footer class="mt-xl text-center">
            <p class="font-label-md text-label-md text-on-surface-variant">
                Paróquia Nossa Senhora do Rosário — Russas, CE
            </p>
            <div class="flex justify-center gap-md mt-sm">
                <span class="material-symbols-outlined text-outline-variant text-[18px]">face_nod</span>
                <span class="material-symbols-outlined text-outline-variant text-[18px]">photo_camera</span>
                <span class="material-symbols-outlined text-outline-variant text-[18px]">location_on</span>
            </div>
        </footer>
    </main>
    <!-- Micro-interaction: Focus effects and ripple simulation -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('registerForm');
            const inputs = form.querySelectorAll('input');

            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    const icon = input.previousElementSibling;
                    if (icon) icon.classList.add('text-primary');
                });
                input.addEventListener('blur', () => {
                    const icon = input.previousElementSibling;
                    if (icon) icon.classList.remove('text-primary');
                });
            });

        });
    </script>
</body>

</html>
