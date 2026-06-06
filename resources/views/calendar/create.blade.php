<!DOCTYPE html>

<html lang="pt-br"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Novo Horário de Celebração - Paróquia Nossa Senhora do Rosário</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex">
<!-- SideNavBar (Shared Component) -->
<aside class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant flex flex-col gap-lg p-lg hidden md:flex">
<div class="flex flex-col gap-xs">
<h1 class="text-title-lg font-display font-bold text-primary">Paróquia Nossa Senhora do Rosário</h1>
<p class="font-label-md text-label-md text-on-surface-variant">Russas - CE</p>
</div>
<nav class="flex flex-col gap-sm flex-1">
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl group" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl group" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="font-label-md text-label-md">Usuários</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl group" href="#">
<span class="material-symbols-outlined" data-icon="church">church</span>
<span class="font-label-md text-label-md">Igrejas</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl group" href="#">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
<span class="font-label-md text-label-md">Padres</span>
</a>
<a class="flex items-center gap-md bg-secondary-container text-on-secondary-container rounded-xl px-md py-sm scale-98 transition-transform duration-200" href="#">
<span class="material-symbols-outlined" data-icon="schedule" style="font-variation-settings: 'FILL' 1;">schedule</span>
<span class="font-label-md text-label-md">Horários</span>
</a>
<div class="mt-auto">
<a class="flex items-center gap-md text-error px-md py-sm hover:bg-error-container/20 transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-label-md text-label-md">Sair</span>
</a>
</div>
</nav>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col min-h-screen">
<!-- TopAppBar (Shared Component) -->
<header class="flex justify-between items-center w-full px-lg py-md h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex items-center gap-md md:hidden">
<span class="material-symbols-outlined text-primary" data-icon="menu">menu</span>
<span class="font-display font-semibold text-primary">Paróquia</span>
</div>
<div class="hidden md:flex items-center gap-sm">
<span class="material-symbols-outlined text-outline" data-icon="chevron_right">chevron_right</span>
<span class="font-label-md text-label-md text-on-surface-variant">Horários</span>
<span class="material-symbols-outlined text-outline" data-icon="chevron_right">chevron_right</span>
<span class="font-label-md text-label-md text-primary font-bold">Novo Cadastro</span>
</div>
<div class="flex items-center gap-md">
<div class="text-right hidden sm:block">
<p class="font-label-md text-label-md font-bold text-on-surface">Admin</p>
<p class="text-caption text-on-surface-variant">Gestor Paroquial</p>
</div>
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center overflow-hidden border border-outline-variant">
<img alt="User Profile Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of a middle-aged man with a friendly expression, wearing a clean white shirt. The background is a soft, blurred office environment with natural lighting and a hint of greenery, reflecting a professional and welcoming corporate aesthetic consistent with a modern parish administration portal." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3Gla5icJGAsspR6GLDdHjku5UepU4X2BQ7f7dW0AhLYPeHxo15S6a5qAKnto7emsIaWBeGbm1LBd4nbIlvrJLc-BnQ7zv0Vrx0KAeZAtYyF11JhDupN9GWYwLg-vUXIXbq5NQUrUc3VpV87AdGsvYOS-zUjndr9GkV-dVaCgrsfuzSRHir3W511W9lZwn7_JUoTk2b-7kE-Tymtlq6-e7LfV0708SAfz7Cr0tKaVs91SuSQys7TwBRa8arsFjs5qA_oBrLxyiyBI"/>
</div>
</div>
</header>
<!-- Form Canvas -->
<section class="flex-1 p-md lg:p-3xl max-w-max-content-width mx-auto w-full">
<div class="mb-lg">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Novo Horário de Celebração</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Preencha as informações abaixo para disponibilizar o novo horário na agenda da comunidade.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
<!-- Left Column: The Form -->
<div class="lg:col-span-2 space-y-lg">
<div class="form-card bg-surface-container-lowest p-lg lg:p-xl rounded-xl">
<form class="space-y-lg" id="schedule-form">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<!-- Igreja Select -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
<span class="material-symbols-outlined text-sm" data-icon="church">church</span>
                                        Igreja / Comunidade
                                    </label>
<select class="w-full h-12 px-md bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all text-on-surface">
<option value="">Selecione a Igreja</option>
<option value="matriz">Matriz Nossa Senhora do Rosário</option>
<option value="santo-antonio">Capela Santo Antônio</option>
<option value="sao-francisco">Capela São Francisco</option>
</select>
</div>
<!-- Padre Select -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
<span class="material-symbols-outlined text-sm" data-icon="person">person</span>
                                        Padre Celebrante
                                    </label>
<select class="w-full h-12 px-md bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all text-on-surface">
<option value="">Selecione o Padre</option>
<option value="pe-joao">Pe. João Silva</option>
<option value="pe-marcos">Pe. Marcos Oliveira</option>
<option value="pe-vitoria">Pe. Antonio Vitoria</option>
</select>
</div>
<!-- Tipo Select -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
<span class="material-symbols-outlined text-sm" data-icon="category">category</span>
                                        Tipo de Celebração
                                    </label>
<select class="w-full h-12 px-md bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all text-on-surface">
<option value="missa">Santa Missa</option>
<option value="batismo">Batismo</option>
<option value="adoracao">Adoração ao Santíssimo</option>
<option value="confissao">Confissões</option>
<option value="terco">Santo Terço</option>
</select>
</div>
<!-- Dia da Semana Select -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
                                        Dia da Semana
                                    </label>
<select class="w-full h-12 px-md bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all text-on-surface">
<option value="domingo">Domingo</option>
<option value="segunda">Segunda-feira</option>
<option value="terca">Terça-feira</option>
<option value="quarta">Quarta-feira</option>
<option value="quinta">Quinta-feira</option>
<option value="sexta">Sexta-feira</option>
<option value="sabado">Sábado</option>
</select>
</div>
<!-- Horário -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                                        Horário
                                    </label>
<input class="w-full h-12 px-md bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all text-on-surface" type="time"/>
</div>
<!-- Status -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
<span class="material-symbols-outlined text-sm" data-icon="settings">settings</span>
                                        Status Inicial
                                    </label>
<div class="flex items-center gap-md h-12">
<label class="flex items-center gap-sm cursor-pointer group">
<input checked="" class="w-4 h-4 text-primary border-outline focus:ring-primary" name="status" type="radio" value="ativo"/>
<span class="font-label-md text-label-md text-on-surface">Ativo</span>
</label>
<label class="flex items-center gap-sm cursor-pointer group">
<input class="w-4 h-4 text-primary border-outline focus:ring-primary" name="status" type="radio" value="inativo"/>
<span class="font-label-md text-label-md text-on-surface">Pendente</span>
</label>
</div>
</div>
</div>
<!-- Observações -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
<span class="material-symbols-outlined text-sm" data-icon="notes">notes</span>
                                    Observações Adicionais
                                </label>
<textarea class="w-full px-md py-sm bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all text-on-surface resize-none" placeholder="Ex: Celebração com transmissão ao vivo, Liturgia especial das crianças..." rows="4"></textarea>
</div>
<!-- Form Actions -->
<div class="flex flex-col sm:flex-row justify-end gap-md pt-md border-t border-outline-variant/30">
<button class="px-xl py-md text-primary font-bold hover:bg-primary-fixed-dim/20 transition-colors rounded-xl font-label-md" type="button">
                                    Cancelar
                                </button>
<button class="px-xl py-md bg-primary text-on-primary font-bold rounded-xl shadow-md hover:opacity-90 active:scale-95 transition-all flex items-center justify-center gap-sm" type="submit">
<span class="material-symbols-outlined" data-icon="save">save</span>
                                    Salvar Celebração
                                </button>
</div>
</form>
</div>
</div>
<!-- Right Column: Context/Help Cards -->
<div class="space-y-lg">
<!-- Devotional Card -->
<div class="bg-surface-container-lowest p-lg rounded-xl form-card relative overflow-hidden group">
<div class="absolute -right-4 -bottom-4 opacity-5 pointer-events-none group-hover:scale-110 transition-transform duration-700">
<span class="material-symbols-outlined text-9xl text-primary" data-icon="church">church</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-sm">Dica Pastoral</h3>
<p class="font-body-md text-body-md text-on-surface-variant italic mb-md">
                            "Pois onde dois ou três estiverem reunidos em meu nome, ali estou eu no meio deles."
                        </p>
<p class="text-caption text-on-surface-variant">
                            Ao cadastrar um novo horário, certifique-se de que a escala dos ministros e coroinhas já esteja alinhada para esta celebração.
                        </p>
</div>
<!-- Visual Feedback / Summary -->
<div class="bg-primary text-on-primary p-lg rounded-xl shadow-lg">
<div class="flex items-center gap-md mb-md">
<div class="w-12 h-12 bg-on-primary/20 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="auto_awesome">auto_awesome</span>
</div>
<h3 class="font-title-lg text-title-lg">Resumo Automático</h3>
</div>
<div class="space-y-sm text-on-primary-container">
<div class="flex justify-between items-center py-xs border-b border-on-primary/10">
<span class="text-caption opacity-80 uppercase tracking-wider">Impacto</span>
<span class="font-label-md">Agenda Digital</span>
</div>
<div class="flex justify-between items-center py-xs border-b border-on-primary/10">
<span class="text-caption opacity-80 uppercase tracking-wider">Visibilidade</span>
<span class="font-label-md">Pública</span>
</div>
<div class="flex justify-between items-center py-xs">
<span class="text-caption opacity-80 uppercase tracking-wider">Notificação</span>
<span class="font-label-md">Push App</span>
</div>
</div>
</div>
<!-- Image Section -->
<div class="rounded-xl overflow-hidden h-48 form-card relative">
<img alt="Interior of a serene church" class="w-full h-full object-cover" data-alt="The serene and bright interior of a modern Catholic church, featuring clean architectural lines, warm wooden pews, and soft morning sunlight streaming through high windows. The atmosphere is peaceful and spiritual, using a palette of soft whites and natural wood tones that harmonize with the brand's green accents. The wide shot emphasizes divine order and communal welcome." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtRx0hIEagmh5wKHe3mH3u8dHUhHeXl0CzOaCsBjrJtxheneMlWbH2Wp50A7sQcsMQX-JpVnseexZK4fWnojBPURzHudhi5mE_Z0l29K1o3lZH1LIhRNRoD9vZJnD_SqHlUE4y2_6GI2DPgKx1RIwh84M2XDUNpqg5qlFXR7JnLVGwcfG17Vg2xEqgTbf0hBzBcv_svPo4HICxfRVjMAhcWY7X5znKwtlHsXLCwVqCgnY_TMCQqSdWnRxPictxCaTqEykurdw-74g"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent flex items-end p-md">
<p class="text-on-primary font-label-md">Ambiente de Adoração</p>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- FAB (Suppressed based on rules as this is a Task-Focused sub-page, but adding a minimal back action) -->
<a class="fixed bottom-lg right-lg w-14 h-14 bg-secondary-container text-on-secondary-container rounded-full shadow-lg flex items-center justify-center hover:scale-105 active:scale-95 transition-all sm:hidden" href="#">
<span class="material-symbols-outlined" data-icon="close">close</span>
</a>
<script>
        // Micro-interaction for form submission
        document.getElementById('schedule-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const originalContent = btn.innerHTML;
            
            btn.disabled = true;
            btn.innerHTML = `<span class="material-symbols-outlined animate-spin" data-icon="progress_activity">progress_activity</span> Gravando...`;
            
            setTimeout(() => {
                btn.classList.replace('bg-primary', 'bg-tertiary-container');
                btn.innerHTML = `<span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span> Sucesso!`;
                
                setTimeout(() => {
                    btn.disabled = false;
                    btn.classList.replace('bg-tertiary-container', 'bg-primary');
                    btn.innerHTML = originalContent;
                }, 2000);
            }, 1500);
        });

        // Highlight input parents on focus
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('translate-x-1');
                input.parentElement.style.transition = 'transform 0.2s ease';
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('translate-x-1');
            });
        });
    </script>
</body></html>