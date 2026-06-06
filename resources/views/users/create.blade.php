<!DOCTYPE html>

<html lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Novo Usuário - Paróquia Nossa Senhora do Rosário</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
</head>
<body class="bg-background font-body-md flex min-h-screen text-on-surface">
<!-- SideNavBar Component -->
<aside class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant/30 flex flex-col gap-lg p-lg">
<div class="flex flex-col gap-xs mb-md">
<h1 class="text-title-lg font-display font-bold text-primary">Paróquia Nossa Senhora do Rosário</h1>
<p class="font-label-md text-label-md text-on-surface-variant">Russas - CE</p>
</div>
<nav class="flex-grow flex flex-col gap-sm">
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-md bg-secondary-container text-on-secondary-container px-md py-sm rounded-xl transition-transform duration-200 scale-98 active:scale-95" href="#">
<span class="material-symbols-outlined" data-icon="group" style="font-variation-settings: 'FILL' 1;">group</span>
<span class="font-label-md text-label-md">Usuários</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="church">church</span>
<span class="font-label-md text-label-md">Igrejas</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
<span class="font-label-md text-label-md">Padres</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="schedule">schedule</span>
<span class="font-label-md text-label-md">Horários</span>
</a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-lg">
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-error-container hover:text-on-error-container transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-label-md text-label-md">Sair</span>
</a>
</div>
</aside>
<main class="flex-grow flex flex-col">
<!-- TopAppBar Component -->
<header class="flex justify-between items-center w-full px-lg py-md h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary" data-icon="person_add">person_add</span>
<h2 class="font-headline-md text-headline-md font-display font-semibold text-primary">Novo Usuário</h2>
</div>
<div class="flex items-center gap-md">
<span class="font-label-md text-label-md text-on-surface-variant bg-surface-container px-md py-xs rounded-full">Admin</span>
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center overflow-hidden border border-outline-variant/30">
<img alt="User Profile Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of a friendly man in his 40s, looking towards the camera with a warm, welcoming expression. The lighting is soft and natural, typical of a high-end corporate portrait. The background is a blurred office interior with soft green and white tones, maintaining a serene and professional atmosphere that aligns with a clean, modern UI." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCa5Gp_G-9CBLZk2ALrzEIMecsWaHj1RLN0NltGHmaJuaymb1dibkeyYyE8z0lZGjuFDhBjBLzDF-CUv7GnD2a3TXU-n-6h6GktTaBLbFJsgE3scfzklqwSqSW-QMQRfhda6v5PW3_K0fi8RDpFtUrtheiQwRmzzQGR5a48GduPYcsFbonsKaZUlz70IltXmx8yFErZjm1ZaljdSAkDKwut2oRsiJ0BAe5xvuOAczeE0skimf5KKgWpIv73Jb4NRVgeVa5rPlLyyIc"/>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<div class="p-xl flex-grow flex flex-col items-center gap-xl overflow-y-auto">
<div class="w-full max-w-content-width">
<div class="mb-xl">
<p class="font-body-lg text-body-lg text-on-surface-variant">Preencha os dados abaixo para realizar o cadastro do novo colaborador ou administrador da paróquia.</p>
</div>
<!-- Form Section (Bento Inspired Grid) -->
<form class="grid grid-cols-1 md:grid-cols-12 gap-lg">
<!-- Basic Info Card -->
<div class="md:col-span-8 bg-surface-container-lowest p-xl rounded-xl border border-outline-variant/20 shadow-soft">
<div class="flex items-center gap-sm mb-lg border-b border-outline-variant/20 pb-sm">
<span class="material-symbols-outlined text-secondary" data-icon="badge">badge</span>
<h3 class="font-title-lg text-title-lg text-primary">Informações Básicas</h3>
</div>
<div class="grid grid-cols-1 gap-lg">
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant" for="nome">Nome Completo</label>
<input class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none" id="nome" placeholder="Ex: João da Silva" type="text"/>
</div>
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant" for="email">E-mail Profissional</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline-variant" data-icon="mail">mail</span>
<input class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg pl-11 pr-md py-sm transition-all font-body-md text-body-md outline-none" id="email" placeholder="joao@exemplo.com" type="email"/>
</div>
</div>
</div>
</div>
<!-- Permissions & Status Card -->
<div class="md:col-span-4 flex flex-col gap-lg">
<div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant/20 shadow-soft flex-grow">
<div class="flex items-center gap-sm mb-md">
<span class="material-symbols-outlined text-secondary" data-icon="security">security</span>
<h3 class="font-title-lg text-title-lg text-primary">Configurações</h3>
</div>
<div class="flex flex-col gap-lg">
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant" for="acesso">Nível de Acesso</label>
<select class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none appearance-none" id="acesso">
<option value="user">Colaborador</option>
<option value="admin">Administrador</option>
<option value="super">Super Usuário</option>
</select>
</div>
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant">Status da Conta</label>
<div class="flex items-center justify-between p-md bg-surface border border-outline-variant/30 rounded-lg">
<span class="font-body-md text-body-md">Ativo</span>
<button class="w-12 h-6 rounded-full bg-primary relative transition-colors duration-300" id="statusToggle" type="button">
<span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform translate-x-6"></span>
</button>
</div>
</div>
</div>
</div>
<!-- Specialty Devotional Card Component -->
<div class="bg-primary-container p-lg rounded-xl border border-primary/20 shadow-soft relative overflow-hidden flex flex-col gap-sm">
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-white/10 text-9xl" data-icon="church">church</span>
<h4 class="font-headline-md text-headline-md text-on-primary-container font-display relative z-10">Lembrete</h4>
<p class="font-body-md text-body-md text-on-primary-container/80 relative z-10 italic">"A missão de evangelizar começa pela organização e cuidado com o próximo."</p>
</div>
</div>
<!-- Security / Password Card -->
<div class="md:col-span-12 bg-surface-container-lowest p-xl rounded-xl border border-outline-variant/20 shadow-soft">
<div class="flex items-center gap-sm mb-lg border-b border-outline-variant/20 pb-sm">
<span class="material-symbols-outlined text-secondary" data-icon="key">key</span>
<h3 class="font-title-lg text-title-lg text-primary">Segurança</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-xl">
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant" for="senha">Senha Temporária</label>
<div class="relative">
<input class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none" id="senha" placeholder="••••••••" type="password"/>
<button class="absolute right-md top-1/2 -translate-y-1/2 text-outline-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
</div>
<p class="font-caption text-caption text-on-surface-variant/70 mt-xs">Mínimo de 8 caracteres.</p>
</div>
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant" for="confirmar_senha">Confirmar Senha</label>
<div class="relative">
<input class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none" id="confirmar_senha" placeholder="••••••••" type="password"/>
<button class="absolute right-md top-1/2 -translate-y-1/2 text-outline-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility_off">visibility_off</span>
</button>
</div>
</div>
</div>
</div>
<!-- Actions -->
<div class="md:col-span-12 flex justify-end items-center gap-lg mt-md">
<button class="px-xl py-md rounded-xl font-label-md text-label-md text-primary hover:bg-surface-container-high transition-all active:scale-95" type="button">
                            Cancelar
                        </button>
<button class="px-xl py-md bg-primary text-on-primary rounded-xl font-label-md text-label-md shadow-md hover:bg-surface-tint transition-all active:scale-95 flex items-center gap-sm" type="submit">
<span class="material-symbols-outlined text-[20px]" data-icon="save">save</span>
                            Salvar Usuário
                        </button>
</div>
</form>
</div>
</div>
<!-- Atmospheric Illustration (Subtle background element) -->
<div class="fixed bottom-0 right-0 w-1/3 h-1/2 opacity-[0.03] pointer-events-none select-none z-0">
<img alt="Architectural Background" class="w-full h-full object-cover" data-alt="A macro architectural detail of a modern, clean cathedral ceiling with light streaming through high windows. The image is captured in a minimalist style with soft, diffused daylight and high-key white tones. The lines are sharp and geometric, creating a sense of peace, order, and divine inspiration, perfectly complementing the modern spiritual brand identity of the parish app." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCqlkBJsf-CTnKHSOh1Bb2tOYILKKyBS6kKLxTjdl1nxhgjhmVfgEESTfnHUM_cqYJOtgxjVNRUE2enrm3MwTMwVqtdfqphYVxGGdzhnQ2nohFxB2i5moIFJgQU18_Bvr37Vkb5XSVW2f_qSLhJpcZc7CJyOc-SP2dplJkUN-TpJS7vl9WNnsFOgF6xG7l8sMAzm0ZnrFSTWFaH738hNidbRd8rxA-Pbc0OT_snHZCvOhiAizNkv68DKVVP6vOd6w8EpQdGvqEDyo"/>
</div>
</main>
<script>
        // Simple micro-interaction for the status toggle
        const toggle = document.getElementById('statusToggle');
        let isActive = true;
        
        toggle.addEventListener('click', () => {
            isActive = !isActive;
            const span = toggle.querySelector('span');
            if (isActive) {
                toggle.classList.remove('bg-outline-variant');
                toggle.classList.add('bg-primary');
                span.classList.add('translate-x-6');
            } else {
                toggle.classList.remove('bg-primary');
                toggle.classList.add('bg-outline-variant');
                span.classList.remove('translate-x-6');
            }
        });

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
</body></html>