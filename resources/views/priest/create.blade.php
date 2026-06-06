<!DOCTYPE html>

<html lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Cadastro de Padre - Paróquia Nossa Senhora do Rosário</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#f0fdf4] font-body-md text-on-surface antialiased devotional-bg">
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant flex flex-col gap-lg p-lg hidden md:flex">
<div class="flex flex-col gap-xs mb-lg">
<span class="text-title-lg font-display font-bold text-primary">Paróquia Nossa Senhora do Rosário</span>
<span class="font-label-md text-label-md text-on-surface-variant">Russas - CE</span>
</div>
<nav class="flex flex-col gap-sm flex-1">
<a class="flex items-center gap-md text-on-surface-variant hover:bg-surface-container-high transition-colors px-md py-sm rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant hover:bg-surface-container-high transition-colors px-md py-sm rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="font-label-md text-label-md">Usuários</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant hover:bg-surface-container-high transition-colors px-md py-sm rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="church">church</span>
<span class="font-label-md text-label-md">Igrejas</span>
</a>
<a class="flex items-center gap-md bg-secondary-container text-on-secondary-container rounded-xl px-md py-sm scale-98 transition-transform duration-200" href="#">
<span class="material-symbols-outlined" data-icon="account_circle" style="font-variation-settings: 'FILL' 1;">account_circle</span>
<span class="font-label-md text-label-md">Padres</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant hover:bg-surface-container-high transition-colors px-md py-sm rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="schedule">schedule</span>
<span class="font-label-md text-label-md">Horários</span>
</a>
</nav>
<a class="flex items-center gap-md text-on-surface-variant hover:bg-surface-container-high transition-colors px-md py-sm rounded-xl mt-auto" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-label-md text-label-md">Sair</span>
</a>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col">
<!-- TopAppBar -->
<header class="flex justify-between items-center w-full px-lg py-md h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined md:hidden" data-icon="menu">menu</span>
<h1 class="font-headline-md text-headline-md text-primary">Cadastro de Padre</h1>
</div>
<div class="flex items-center gap-md">
<span class="font-label-md text-label-md text-on-surface-variant">Admin</span>
<div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container font-bold text-xs">
                        AD
                    </div>
</div>
</header>
<!-- Page Canvas -->
<div class="p-lg md:p-3xl max-w-max-content-width mx-auto w-full devotional-bg">
<!-- Form Container (Card) -->
<section class="bg-surface rounded-xl shadow-[0_4px_20px_rgba(21,128,61,0.05)] border border-secondary-container/30 overflow-hidden">
<div class="p-lg border-b border-outline-variant/30 bg-surface-container-low flex items-center gap-md">
<span class="material-symbols-outlined text-primary" data-icon="person_add">person_add</span>
<h2 class="font-title-lg text-title-lg text-on-surface">Informações do Clérigo</h2>
</div>
<form class="p-lg md:p-xl space-y-lg" id="priestForm">
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
<!-- Nome Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant px-1" for="name">Nome Completo</label>
<div class="relative group">
<input class="w-full bg-surface border border-secondary-container rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" id="name" name="name" placeholder="Ex: Pe. José da Silva" type="text"/>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-outline opacity-40 group-focus-within:opacity-100 transition-opacity" data-icon="person">person</span>
</div>
</div>
<!-- Status Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant px-1" for="status">Status</label>
<select class="w-full bg-surface border border-secondary-container rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none appearance-none" id="status" name="status">
<option value="active">Ativo na Paróquia</option>
<option value="emeritus">Emérito</option>
<option value="visiting">Visitante</option>
<option value="leave">Em Licença</option>
</select>
</div>
<!-- Telefone Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant px-1" for="phone">Telefone / WhatsApp</label>
<div class="relative group">
<input class="w-full bg-surface border border-secondary-container rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" id="phone" name="phone" placeholder="(88) 99999-9999" type="tel"/>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-outline opacity-40 group-focus-within:opacity-100 transition-opacity" data-icon="call">call</span>
</div>
</div>
<!-- E-mail Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant px-1" for="email">E-mail</label>
<div class="relative group">
<input class="w-full bg-surface border border-secondary-container rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" id="email" name="email" placeholder="padre@diocese.com.br" type="email"/>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-outline opacity-40 group-focus-within:opacity-100 transition-opacity" data-icon="mail">mail</span>
</div>
</div>
<!-- Data de Ordenação -->
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant px-1" for="ordination">Data de Ordenação</label>
<div class="relative group">
<input class="w-full bg-surface border border-secondary-container rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" id="ordination" name="ordination" type="date"/>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-outline opacity-40 group-focus-within:opacity-100 transition-opacity pointer-events-none" data-icon="calendar_month">calendar_month</span>
</div>
</div>
</div>
<!-- Observações -->
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant px-1" for="notes">Observações e Histórico</label>
<textarea class="w-full bg-surface border border-secondary-container rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none resize-none" id="notes" name="notes" placeholder="Detalhes adicionais, paróquias anteriores ou cargos ocupados..." rows="4"></textarea>
</div>
<!-- Actions -->
<div class="flex flex-col sm:flex-row justify-end items-center gap-md pt-lg border-t border-outline-variant/30">
<button class="w-full sm:w-auto px-lg py-sm font-label-md text-label-md text-primary bg-secondary-container hover:bg-secondary-container/70 rounded-full transition-colors order-2 sm:order-1" type="button">
                                Cancelar
                            </button>
<button class="group relative w-full sm:w-auto px-xl py-sm font-label-md text-label-md text-on-primary bg-primary hover:bg-primary/90 rounded-full transition-all flex items-center justify-center gap-sm shadow-md hover:shadow-lg active:scale-95 order-1 sm:order-2 overflow-hidden" id="submitBtn" type="submit">
<span class="relative z-10">Salvar Cadastro</span>
<span class="material-symbols-outlined relative z-10" data-icon="save">save</span>
<!-- Ripple Effect Element -->
<div class="absolute inset-0 bg-white/20 translate-y-full group-active:translate-y-0 transition-transform duration-300" id="ripple"></div>
</button>
</div>
</form>
</section>
<!-- Helpful Card / Devotional Card Pattern -->
<div class="mt-2xl bg-surface-container-highest rounded-xl p-lg flex flex-col md:flex-row items-center gap-lg border border-outline-variant/20 relative overflow-hidden">
<div class="absolute -right-8 -bottom-8 opacity-5">
<span class="material-symbols-outlined text-[160px]" data-icon="church">church</span>
</div>
<div class="bg-primary/10 p-md rounded-full">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="info">info</span>
</div>
<div>
<h3 class="font-title-lg text-title-lg text-on-surface">Diretrizes Episcopais</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Lembre-se de anexar a documentação canônica e os certificados de ordenação na pasta física do clérigo após o cadastro digital.</p>
</div>
</div>
</div>
</main>
</div>
<script>
        document.getElementById('priestForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const originalContent = btn.innerHTML;
            
            // Visual feedback
            btn.innerHTML = `
                <span class="flex items-center gap-sm">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processando...
                </span>
            `;
            btn.disabled = true;
            btn.classList.add('opacity-80', 'cursor-not-allowed');

            // Simulate API call
            setTimeout(() => {
                btn.innerHTML = `
                    <span class="flex items-center gap-sm">
                        <span class="material-symbols-outlined" data-icon="check_circle">check_circle</span>
                        Cadastrado com Sucesso!
                    </span>
                `;
                btn.classList.replace('bg-primary', 'bg-green-600');
                
                setTimeout(() => {
                    btn.innerHTML = originalContent;
                    btn.disabled = false;
                    btn.classList.remove('opacity-80', 'cursor-not-allowed', 'bg-green-600');
                    btn.classList.add('bg-primary');
                    document.getElementById('priestForm').reset();
                }, 2000);
            }, 1500);
        });

        // Simple sidebar toggle for mobile
        const mobileMenuIcon = document.querySelector('[data-icon="menu"]');
        if(mobileMenuIcon) {
            mobileMenuIcon.addEventListener('click', () => {
                alert('A navegação lateral seria aberta aqui em dispositivos móveis.');
            });
        }
    </script>
</body></html>