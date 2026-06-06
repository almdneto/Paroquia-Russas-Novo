<!DOCTYPE html>

<html class="light" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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

<body class="error-page-bg font-body-md text-on-surface antialiased min-h-screen flex items-center justify-center p-md">
    <!-- Access Denied Canvas -->
    <main
        class="max-w-[500px] w-full bg-surface-container-lowest rounded-xl p-xl shadow-lg border border-secondary-container/30 flex flex-col items-center text-center relative overflow-hidden">
        <!-- Atmospheric Background Decoration -->
        <div class="absolute -top-16 -right-16 w-32 h-32 bg-primary-container/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-16 -left-16 w-32 h-32 bg-secondary-container/10 rounded-full blur-3xl"></div>
        <!-- Lock Icon Container -->
        <div class="lock-animation relative mb-lg">
            <div class="w-24 h-24 bg-secondary-container rounded-full flex items-center justify-center shadow-sm">
                <span class="material-symbols-outlined text-[48px] text-primary"
                    data-icon="lock_person">lock_person</span>
            </div>
            <!-- Secondary Decorative Elements -->
            <div
                class="absolute -top-1 -right-1 w-8 h-8 bg-error-container rounded-full flex items-center justify-center border-4 border-surface-container-lowest">
                <span class="material-symbols-outlined text-[14px] text-error font-bold" data-icon="close">close</span>
            </div>
        </div>
        <!-- Text Content -->
        <div class="space-y-md mb-xl">
            <h1 class="font-display text-headline-lg text-primary tracking-tight">
                Acesso Negado
            </h1>
            <p class="font-body-md text-on-surface-variant max-w-[320px] mx-auto">
                Você não tem permissão para visualizar esta página. Por favor, entre em contato com o administrador do
                sistema.
            </p>
        </div>
        <!-- Action Buttons -->
        <div class="w-full flex flex-col gap-sm">
            <a class="group relative flex items-center justify-center gap-sm bg-primary text-on-primary font-label-md text-label-md py-md px-xl rounded-xl transition-all duration-200 hover:bg-primary-container active:scale-95 shadow-md hover:shadow-lg"
                href="#">
                <span class="material-symbols-outlined text-[20px]" data-icon="dashboard">dashboard</span>
                Voltar ao Dashboard
            </a>
            <a class="flex items-center justify-center gap-sm bg-transparent border border-outline text-primary font-label-md text-label-md py-md px-xl rounded-xl transition-all duration-200 hover:bg-surface-container-high active:scale-95"
                href="#">
                <span class="material-symbols-outlined text-[20px]" data-icon="login">login</span>
                Fazer Login com outra conta
            </a>
        </div>
        <!-- Support Link -->
        <div class="mt-xl pt-lg border-t border-outline-variant/30 w-full">
            <p class="text-caption text-on-surface-variant">
                Dúvidas? <a class="text-primary font-semibold hover:underline" href="#">Falar com o suporte
                    paroquial</a>
            </p>
        </div>
        <!-- Subtle Brand Anchor -->
        <div class="mt-md opacity-20 select-none pointer-events-none">
            <span class="font-display font-bold text-label-md text-primary">Paróquia Nossa Senhora do Rosário</span>
        </div>
    </main>
    <!-- Devotional Card Overlay (Atmospheric element from Style Guidance) -->
    <div class="fixed bottom-lg right-lg hidden md:block max-w-[280px]">
        <div
            class="bg-surface-container-lowest rounded-xl p-md border border-secondary-container/20 shadow-sm relative overflow-hidden">
            <div class="absolute right-0 bottom-0 opacity-5 pointer-events-none">
                <span class="material-symbols-outlined text-[80px]" data-icon="church">church</span>
            </div>
            <p class="font-body-md text-caption text-on-surface-variant italic mb-sm">
                "Não temas, porque eu sou contigo; não te assombres, porque eu sou teu Deus..."
            </p>
            <p class="font-label-md text-caption text-primary font-semibold">
                Isaías 41:10
            </p>
        </div>
    </div>
    <script>
        // Simple micro-interaction for buttons
        document.querySelectorAll('a').forEach(button => {
            button.addEventListener('mouseenter', () => {
                const icon = button.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transition = 'transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    icon.style.transform = 'scale(1.2) rotate(-5deg)';
                }
            });
            button.addEventListener('mouseleave', () => {
                const icon = button.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });
    </script>
</body>

</html>
