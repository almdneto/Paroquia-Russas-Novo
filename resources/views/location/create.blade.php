<!DOCTYPE html>

<html class="light" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Cadastro de Igreja - Paróquia Nossa Senhora do Rosário</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Geist:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
</head>
<body class="bg-[#F0FDF4] font-body-md text-on-background antialiased overflow-x-hidden">
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant/30 flex flex-col gap-lg p-lg hidden md:flex shrink-0">
<div class="flex flex-col gap-xs mb-md">
<h1 class="text-title-lg font-display font-bold text-primary">Paróquia Nossa Senhora do Rosário</h1>
<p class="font-label-md text-label-md text-on-surface-variant">Russas - CE</p>
</div>
<nav class="flex flex-col gap-sm flex-1">
<!-- Dashboard -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<!-- Usuários -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined">group</span>
<span class="font-label-md text-label-md">Usuários</span>
</a>
<!-- Igrejas (ACTIVE) -->
<a class="flex items-center gap-md bg-secondary-container text-on-secondary-container rounded-xl px-md py-sm scale-98 transition-transform duration-200" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">church</span>
<span class="font-label-md text-label-md">Igrejas</span>
</a>
<!-- Padres -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined">account_circle</span>
<span class="font-label-md text-label-md">Padres</span>
</a>
<!-- Horários -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined">schedule</span>
<span class="font-label-md text-label-md">Horários</span>
</a>
</nav>
<div class="pt-lg border-t border-outline-variant/30">
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-label-md text-label-md">Sair</span>
</a>
</div>
</aside>
<!-- Main Content Area -->
<div class="flex-1 flex flex-col min-w-0">
<!-- TopAppBar -->
<header class="flex justify-between items-center w-full px-lg py-md h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex items-center gap-md">
<button class="md:hidden p-sm rounded-full hover:bg-surface-container">
<span class="material-symbols-outlined">menu</span>
</button>
<h2 class="font-display font-semibold text-primary font-title-lg text-title-lg">Paróquia Nossa Senhora do Rosário</h2>
</div>
<div class="flex items-center gap-md">
<span class="hidden sm:inline font-label-md text-label-md text-on-surface-variant">Admin</span>
<div class="w-10 h-10 rounded-full overflow-hidden border border-outline-variant">
<img alt="User Profile Avatar" data-alt="A professional and friendly portrait of a person in high-key soft lighting, suitable for a corporate profile. The background is a clean, minimalist studio setting with soft grey tones. The subject is smiling warmly, conveying a sense of helpfulness and community leadership within a professional church administration context." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIGlfEkiD7TeN5XOpimHrhyW5eMcpO2fkMtC-SkqbiyH-E77dMfK6_Ba0zitb-6hk9637NrYkZXrVarDkHq9W1Mpf8QRpT1MhX3fZpZABxMnOlO3xd8AkPCnFwIkEGmSuvqyj3d3iKk6FqaENbuLJp2oAmCwnGpLpr3VrJjIhqb9IY-IOXrDCx2Cod-taQbN2xNQD8U35AD6nwBsJcbsUUCCkdpDSB7DvhUeUvdhoSpkWkIMrgu9ynM072caKMdRazDu9o87w6kNA"/>
</div>
</div>
</header>
<!-- Content Canvas -->
<main class="p-lg md:p-3xl max-w-max-content-width mx-auto w-full">
<!-- Header Section -->
<div class="mb-xl">
<div class="flex items-center gap-sm text-primary mb-sm">
<span class="material-symbols-outlined">church</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Gestão Patrimonial</span>
</div>
<h1 class="font-headline-lg text-headline-lg font-display mb-sm">Nova Igreja ou Capela</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">Cadastre as informações da nova unidade religiosa. Essas informações serão utilizadas para o catálogo paroquial e agendamento de serviços.</p>
</div>
<!-- Form Card -->
<div class="bg-white rounded-xl border border-secondary-fixed/30 shadow-[0_4px_20px_rgba(21,128,61,0.05)] p-lg md:p-xl overflow-hidden relative">
<!-- Decorative Background Element -->
<span class="material-symbols-outlined absolute -bottom-12 -right-12 text-[200px] text-primary/5 select-none pointer-events-none">church</span>
<form class="space-y-lg relative z-10">
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
<!-- Nome -->
<div class="flex flex-col gap-sm">
<label class="font-label-md text-label-md text-on-surface" for="nome">Nome da Igreja/Capela</label>
<input class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm font-body-md text-body-md form-input-focus transition-all" id="nome" name="nome" placeholder="Ex: Capela de Santo Antônio" type="text"/>
</div>
<!-- Comunidade -->
<div class="flex flex-col gap-sm">
<label class="font-label-md text-label-md text-on-surface" for="comunidade">Comunidade</label>
<input class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm font-body-md text-body-md form-input-focus transition-all" id="comunidade" name="comunidade" placeholder="Ex: Planalto da Galiléia" type="text"/>
</div>
<!-- Endereço (Full width on mobile, span 2 on desktop) -->
<div class="flex flex-col gap-sm md:col-span-2">
<label class="font-label-md text-label-md text-on-surface" for="endereco">Endereço Completo</label>
<input class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm font-body-md text-body-md form-input-focus transition-all" id="endereco" name="endereco" placeholder="Rua, Número, Bairro" type="text"/>
</div>
<!-- Cidade -->
<div class="flex flex-col gap-sm">
<label class="font-label-md text-label-md text-on-surface" for="cidade">Cidade</label>
<input class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm font-body-md text-body-md form-input-focus transition-all" id="cidade" name="cidade" type="text" value="Russas"/>
</div>
<!-- Estado -->
<div class="flex flex-col gap-sm">
<label class="font-label-md text-label-md text-on-surface" for="estado">Estado</label>
<select class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm font-body-md text-body-md form-input-focus transition-all" id="estado" name="estado">
<option value="CE">Ceará</option>
<option value="RN">Rio Grande do Norte</option>
<option value="PB">Paraíba</option>
<option value="PE">Pernambuco</option>
</select>
</div>
<!-- Status -->
<div class="flex flex-col gap-sm">
<label class="font-label-md text-label-md text-on-surface" for="status">Status de Funcionamento</label>
<div class="flex gap-md mt-sm">
<label class="flex items-center gap-sm cursor-pointer group">
<input checked="" class="w-4 h-4 text-primary focus:ring-primary border-outline-variant" name="status" type="radio" value="ativo"/>
<span class="font-body-md text-body-md group-hover:text-primary transition-colors">Ativo</span>
</label>
<label class="flex items-center gap-sm cursor-pointer group">
<input class="w-4 h-4 text-primary focus:ring-primary border-outline-variant" name="status" type="radio" value="inativo"/>
<span class="font-body-md text-body-md group-hover:text-primary transition-colors">Inativo</span>
</label>
<label class="flex items-center gap-sm cursor-pointer group">
<input class="w-4 h-4 text-primary focus:ring-primary border-outline-variant" name="status" type="radio" value="reforma"/>
<span class="font-body-md text-body-md group-hover:text-primary transition-colors">Em Reforma</span>
</label>
</div>
</div>
<!-- Observações -->
<div class="flex flex-col gap-sm md:col-span-2">
<label class="font-label-md text-label-md text-on-surface" for="observacoes">Observações Adicionais</label>
<textarea class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm font-body-md text-body-md form-input-focus transition-all" id="observacoes" name="observacoes" placeholder="Detalhes sobre a construção, horários especiais ou necessidades da comunidade..." rows="4"></textarea>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row items-center justify-end gap-md pt-lg mt-lg border-t border-outline-variant/30">
<button class="w-full sm:w-auto px-xl py-sm rounded-full font-label-md text-label-md text-primary border border-primary/20 hover:bg-on-primary-container transition-all" type="button">
                                Cancelar
                            </button>
<button class="w-full sm:w-auto px-xl py-sm rounded-full font-label-md text-label-md bg-primary text-white hover:opacity-90 shadow-sm active:scale-95 transition-all" type="submit">
                                Salvar Cadastro
                            </button>
</div>
</form>
</div>
<!-- Devotional Card Sidebar / Bottom -->
<div class="mt-2xl grid grid-cols-1 md:grid-cols-3 gap-lg">
<div class="md:col-span-2 bg-secondary-container/30 border border-secondary-fixed/50 rounded-xl p-lg flex flex-col justify-center">
<div class="flex items-center gap-sm mb-sm text-secondary">
<span class="material-symbols-outlined">help_outline</span>
<h4 class="font-title-lg text-title-lg">Dica de Preenchimento</h4>
</div>
<p class="font-body-md text-body-md text-on-secondary-container">Certifique-se de que o endereço esteja correto para que os fiéis possam localizar a capela através do Google Maps integrado no portal da paróquia.</p>
</div>
<div class="bg-white border border-outline-variant/30 rounded-xl p-lg flex flex-col items-center text-center justify-center relative overflow-hidden">
<span class="material-symbols-outlined absolute top-4 right-4 text-primary/10 text-4xl">local_florist</span>
<h4 class="font-display font-semibold text-primary font-headline-md text-headline-md mb-xs">Zelo</h4>
<p class="font-caption text-caption text-on-surface-variant italic">"A vossa casa é casa de oração."</p>
</div>
</div>
</main>
</div>
</div>
<!-- Mobile Navigation Bar (Bottom) -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 bg-surface border-t border-outline-variant/30 px-md py-sm flex justify-around items-center z-50">
<a class="flex flex-col items-center gap-xs text-on-surface-variant" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-[10px] font-label-md">Home</span>
</a>
<a class="flex flex-col items-center gap-xs text-primary" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">church</span>
<span class="text-[10px] font-label-md">Igrejas</span>
</a>
<a class="flex flex-col items-center gap-xs text-on-surface-variant" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-[10px] font-label-md">Pessoas</span>
</a>
<a class="flex flex-col items-center gap-xs text-on-surface-variant" href="#">
<span class="material-symbols-outlined">schedule</span>
<span class="text-[10px] font-label-md">Agenda</span>
</a>
</nav>
<script>
        // Simple form interaction simulation
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Salvando...';
            
            setTimeout(() => {
                submitBtn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Salvo!';
                submitBtn.classList.remove('bg-primary');
                submitBtn.classList.add('bg-secondary');
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.classList.remove('bg-secondary');
                    submitBtn.classList.add('bg-primary');
                    submitBtn.disabled = false;
                    alert('Igreja cadastrada com sucesso no sistema da Paróquia!');
                }, 2000);
            }, 1500);
        });

        // Hover effect for interactive elements
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('mouseenter', () => {
                if(input.parentElement.querySelector('label')) {
                    input.parentElement.querySelector('label').classList.add('text-primary');
                }
            });
            input.addEventListener('mouseleave', () => {
                if(document.activeElement !== input) {
                    input.parentElement.querySelector('label').classList.remove('text-primary');
                }
            });
        });
    </script>
</body></html>