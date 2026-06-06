<!DOCTYPE html>

<html class="light" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - Paróquia Nossa Senhora do Rosário</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap"
        rel="stylesheet" />
</head>

<body class="bg-login-texture min-h-screen flex items-center justify-center font-body-md p-md">
    <!-- Content Canvas -->
    <main class="w-full max-w-[440px] z-10">
        <!-- Devotional Card Style Login -->
        <div
            class="bg-surface-container-lowest rounded-xl p-xl login-card-shadow border border-secondary-container flex flex-col items-center">
            <!-- Brand Identity Section -->
            <div class="mb-xl text-center">
                <div class="mb-md flex justify-center">
                    <div
                        class="w-16 h-16 rounded-full bg-secondary-container flex items-center justify-center text-primary transition-transform hover:scale-105 duration-300">
                        <span class="material-symbols-outlined !text-[40px]" data-icon="church">church</span>
                    </div>
                </div>
                <h1 class="font-headline-md text-headline-md text-primary mb-xs">
                    Paróquia Nossa Senhora do Rosário
                </h1>
                <p class="font-body-md text-body-md text-on-surface-variant opacity-80">
                    Russas - CE
                </p>
            </div>
            <!-- Login Form -->
            <form action="#" class="w-full flex flex-col gap-lg">
                <!-- Email Input Group -->
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-on-surface-variant px-xs" for="email">E-mail</label>
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-primary transition-colors">mail</span>
                        <input
                            class="w-full pl-12 pr-md py-md bg-surface border border-secondary-container rounded-lg font-body-md text-on-surface placeholder:text-outline-variant focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none"
                            id="email" placeholder="exemplo@email.com" required="" type="email" />
                    </div>
                </div>
                <!-- Password Input Group -->
                <div class="flex flex-col gap-xs">
                    <div class="flex justify-between items-center px-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="password">Senha</label>
                    </div>
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-primary transition-colors">lock</span>
                        <input
                            class="w-full pl-12 pr-12 py-md bg-surface border border-secondary-container rounded-lg font-body-md text-on-surface placeholder:text-outline-variant focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none"
                            id="password" placeholder="Sua senha segura" required="" type="password" />
                        <button
                            class="absolute right-md top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition-colors"
                            onclick="togglePasswordVisibility()" type="button">
                            <span class="material-symbols-outlined" id="eye-icon">visibility</span>
                        </button>
                    </div>
                </div>
                <!-- Remember & Forgot Password -->
                <div class="flex items-center justify-between font-label-md text-label-md">
                    <label class="flex items-center gap-sm cursor-pointer select-none group">
                        <div class="relative flex items-center">
                            <input
                                class="peer h-5 w-5 cursor-pointer appearance-none rounded border border-secondary-container bg-surface checked:bg-primary checked:border-primary transition-all focus:ring-offset-0 focus:ring-0"
                                type="checkbox" />
                            <span
                                class="material-symbols-outlined absolute opacity-0 peer-checked:opacity-100 text-on-primary text-sm left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none">check</span>
                        </div>
                        <span
                            class="text-on-surface-variant group-hover:text-on-surface transition-colors">Lembrar-me</span>
                    </label>
                    <a class="text-primary hover:underline font-semibold transition-all" href="#">Esqueceu a senha?</a>
                </div>
                <!-- Submit Button -->
                <button
                    class="w-full py-md bg-primary-container hover:bg-primary text-on-primary font-title-lg text-title-lg rounded-xl shadow-sm hover:shadow-md active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-sm"
                    type="submit">
                    Acessar o Sistema
                    <span class="material-symbols-outlined">login</span>
                </button>
            </form>
            <!-- Secondary Action -->
            <div class="mt-xl text-center">
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Não tem uma conta? <a class="text-primary font-semibold hover:underline" href="#">Crie uma aqui</a>
                </p>
            </div>
        </div>
        <!-- System Footer -->
        <div class="mt-lg text-center opacity-60">
            <p class="font-caption text-caption text-on-surface-variant">
                © 2024 Paróquia Nossa Senhora do Rosário. Desenvolvido para a comunidade.
            </p>
        </div>
    </main>
    <!-- Peace Ambient Background Image -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <img class="w-full h-full object-cover opacity-20 filter blur-sm scale-105"
            data-alt="A serene and minimalist interior of a modern Catholic church during golden hour. The sunlight streams through high windows, creating long, soft shadows on the pristine white walls and polished stone floors. The atmosphere is quiet and spiritual, featuring a restricted palette of soft whites and pale greens that perfectly aligns with a clean digital design system. The lighting is ethereal and high-key, evoking a deep sense of peace and divine order."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCX8g2jteFE9hSvP0NhscvT39dgaMxno432zZxfihnHtDbML5cIzaPv58cJFPSHpc7vggv6ikhDygRAUsh8Uzpc00__vPbcQ6JuJVCS4Xjpc6eKaOpnZFa5I6UGkQpLHzMu7A7ji47D1fGF8ggDPP4sgf7YIBJaVYYnT6NmNrCP-Sm_232zGMWgWtvI5nsquKt-2s0MyjYc2EuUdzjj9JhkZQGzpzmo40QKt6-xW1YWFn8gC-yh89RbnO-dCnFr3Ev0OJHvAtDzRRY" />
        <!-- Overlay Gradient for better contrast -->
        <div class="absolute inset-0 bg-gradient-to-tr from-white/60 via-transparent to-white/40"></div>
    </div>
    <!-- Micro-interaction Script -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerText = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerText = 'visibility';
            }
        }

        // Form submission animation mock
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = e.target.querySelector('button');
            const originalContent = btn.innerHTML;
            btn.innerHTML = `<span class="material-symbols-outlined animate-spin">progress_activity</span> Carregando...`;
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = originalContent;
                btn.disabled = false;
                alert('Bem-vindo à Paróquia!');
            }, 1500);
        });
    </script>
</body>

</html>