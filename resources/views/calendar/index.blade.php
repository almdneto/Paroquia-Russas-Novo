<!DOCTYPE html>

<html lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
</head>
<body class="bg-background text-on-surface font-body-md">
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant flex flex-col gap-lg p-lg overflow-y-auto">
<div class="flex flex-col gap-xs mb-lg">
<div class="flex items-center gap-md">
<img alt="Logomarca Paroquial" class="w-12 h-12 rounded-lg" data-alt="A clean and professional logo for a Catholic Parish called Paróquia Nossa Senhora do Rosário. The logo should feature a stylized green rosary and a minimalist cross, set against a soft white background. The aesthetic is serene, spiritually grounded, and modern, using a palette of deep botanical greens and pristine whites." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMzD9hceEepHag_0XrpYKIhnuNF8mqoC1D_oPDkKv6vND72Be2n0xS7-yawKvoj8bU8nv208MPOK9wL-l61G2PnbLvrnFhUaVe7MXNntmItCxmBawcH-G5MzGm3hAkM-Akms9t8tWwggWxhY2e9pIxZaoumXJAq7APUurvHQiQr1QmXTcEIycGuPlR3lQT3L0tQamvHsG65PYcIFBOPfipbL1RKApUDu9QRHQqcVeOHac7VhOd5Jz1aHPxn8Hh9aAYFLss1SaaaJk"/>
<div class="flex flex-col">
<span class="text-title-lg font-display font-bold text-primary">PNSR</span>
<span class="font-label-md text-label-md text-on-surface-variant">Russas - CE</span>
</div>
</div>
</div>
<nav class="flex flex-col gap-sm flex-1">
<!-- Dashboard -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<!-- Usuários -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="font-label-md text-label-md">Usuários</span>
</a>
<!-- Igrejas -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="church">church</span>
<span class="font-label-md text-label-md">Igrejas</span>
</a>
<!-- Padres -->
<a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl" href="#">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
<span class="font-label-md text-label-md">Padres</span>
</a>
<!-- Horários (ACTIVE) -->
<a class="flex items-center gap-md bg-secondary-container text-on-secondary-container rounded-xl px-md py-sm scale-98 transition-transform duration-200" href="#">
<span class="material-symbols-outlined" data-icon="schedule" style="font-variation-settings: 'FILL' 1;">schedule</span>
<span class="font-label-md text-label-md">Horários</span>
</a>
</nav>
<div class="mt-auto border-t border-outline-variant/30 pt-lg">
<button class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors w-full rounded-xl">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-label-md text-label-md">Sair</span>
</button>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col">
<!-- TopAppBar -->
<header class="flex justify-between items-center w-full px-lg py-md h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex items-center gap-md">
<h1 class="font-display font-semibold text-primary text-title-lg">Paróquia Nossa Senhora do Rosário</h1>
</div>
<div class="flex items-center gap-lg">
<div class="flex items-center gap-sm bg-surface-container-low px-md py-xs rounded-full border border-outline-variant/50">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-md text-label-md text-on-surface-variant">Admin</span>
</div>
<img alt="User Profile Avatar" class="w-10 h-10 rounded-full border-2 border-primary-fixed" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCmgeuVQtO-gP7YVt0eHRizLwoj5i0p-IJuqxOFCHXVnxCeL9UxofwoGoXQWAn93-bpK4Q37DbhfG5hwvuqVYOeUEo8-OM6U_O_ejF1LKrb_Mu0M22AmRl6txyNVMDphTmabuNEGu2Eop4AjFWEXym5fHE84bZ-RncKxVKqCXkgoQAmJ-eiZGAFXqGBLg4p67PfOb7SV0fsLP8fMKu9yFd35zXfX88qrjXe6pvWOIgbM6ST_AmNj1CqoIQBhok8OkF5HJhvDswa9tM"/>
</div>
</header>
<!-- Page Content -->
<section class="p-xl max-w-max-content-width mx-auto w-full flex flex-col gap-xl">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-md">
<div>
<h2 class="font-headline-md text-headline-md text-primary mb-xs">Horários</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Agenda de missas e celebrações paroquiais</p>
</div>
<button class="flex items-center gap-sm bg-primary text-on-primary px-lg py-md rounded-xl font-label-md text-label-md hover:opacity-90 transition-opacity shadow-sm">
<span class="material-symbols-outlined" data-icon="add">add</span>
                        Novo Horário
                    </button>
</div>
<!-- Stats / Bento Grid Mini -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
<div class="glass-card p-lg rounded-xl flex items-center gap-lg">
<div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined" data-icon="church">church</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Celebrações Hoje</p>
<p class="font-headline-md text-headline-md text-primary">08</p>
</div>
</div>
<div class="glass-card p-lg rounded-xl flex items-center gap-lg">
<div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed-variant">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Esta Semana</p>
<p class="font-headline-md text-headline-md text-primary">42</p>
</div>
</div>
<div class="glass-card p-lg rounded-xl flex items-center gap-lg">
<div class="w-12 h-12 rounded-full bg-surface-variant flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="groups">groups</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Igrejas Ativas</p>
<p class="font-headline-md text-headline-md text-primary">06</p>
</div>
</div>
</div>
<!-- Table Content -->
<div class="glass-card rounded-xl overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-low border-b border-outline-variant/30">
<tr>
<th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Igreja</th>
<th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Padre</th>
<th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Tipo</th>
<th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Dia</th>
<th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Horário</th>
<th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Status</th>
<th class="px-lg py-md font-label-md text-label-md text-on-surface-variant text-right">Ações</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/20">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<div class="flex flex-col">
<span class="font-title-lg text-body-md font-semibold text-primary">Matriz Nossa Sra. do Rosário</span>
<span class="text-caption text-on-surface-variant">Centro</span>
</div>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-sm">
<img alt="Padre Francisco" class="w-8 h-8 rounded-full" data-alt="A portrait of a kind-looking elderly Catholic priest with gray hair and a gentle smile, wearing a traditional black clerical collar. The lighting is soft and natural, coming from a side window, creating a warm, spiritual, and welcoming atmosphere. The background is slightly blurred, showing the wooden interior of a parish office in a modern corporate style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4MH6PYWSt1lj5oecbk3UQDwDx0IZhsLqo7jpu1o3hjo7aBlitYuBNIGuWaMPi0nnoVPPGWuEDm2xURq4F-Z2MR1mad4hwMoPBtGyz_BeSIMZ1XSJf-gRYWzwjHviTi2YbRv1CracPvS8NUa4fuAXZbyaoqtEwXd63Z5ZE12m8cZo1jtTYT9D2RY2lp5rz0haIJkf4uFV6eArnW-TeWPUXZ83Gget4XgQfs32mXsdv5nbMkoGQUL0eAH6L--UVRtOHdl9gq04XGUQ"/>
<span class="font-body-md text-body-md">Pe. Francisco</span>
</div>
</td>
<td class="px-lg py-lg">
<span class="px-md py-xs rounded-full bg-secondary-container text-on-secondary-container text-caption font-medium uppercase tracking-wider">Missa</span>
</td>
<td class="px-lg py-lg font-body-md text-body-md">Domingo</td>
<td class="px-lg py-lg font-body-md text-body-md font-bold text-primary">07:00</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-xs text-primary">
<span class="material-symbols-outlined text-[16px]" data-icon="check_circle">check_circle</span>
<span class="text-caption font-medium">Confirmado</span>
</div>
</td>
<td class="px-lg py-lg text-right">
<div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-sm hover:bg-surface-variant rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-sm hover:bg-error-container hover:text-on-error-container rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<div class="flex flex-col">
<span class="font-title-lg text-body-md font-semibold text-primary">Capela São José</span>
<span class="text-caption text-on-surface-variant">Bairro de Fátima</span>
</div>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-sm">
<img alt="Pe. Antônio" class="w-8 h-8 rounded-full" data-alt="A portrait of a middle-aged Catholic priest with a friendly expression and dark hair, wearing a professional clerical shirt. The background is a clean, minimalist wall with soft shadows. The lighting is high-key and bright, evoking a sense of divine order and clarity, consistent with a modern minimalist ecclesiastical brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuApkoMehkRRvm7vG1yfYTTBXElRYnr5_h1e-BSGctvXVIpM1lLPnKusWZJ2fABwM92K-IWrdpjGyJGaELaaJ_2jXNEDwOkMrCec1c7PF7Y4h_OVmrTvazM0d9vWfyp8SXbMaONxTbfzO62xxIz_lEEt2Tp0l7wuHiCefwWdh6VtbC_VQ-9VrASXCbek0H5MUGopmEhJQ9si2JnKWjv0biQTZDiqkZFcMCjv2pH5HnVHL7DKaOtQGviZBSzhmsok9HARpfIXecrMtkc"/>
<span class="font-body-md text-body-md">Pe. Antônio</span>
</div>
</td>
<td class="px-lg py-lg">
<span class="px-md py-xs rounded-full bg-tertiary-container text-on-tertiary-container text-caption font-medium uppercase tracking-wider">Batismo</span>
</td>
<td class="px-lg py-lg font-body-md text-body-md">Sábado</td>
<td class="px-lg py-lg font-body-md text-body-md font-bold text-primary">09:00</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-xs text-primary">
<span class="material-symbols-outlined text-[16px]" data-icon="check_circle">check_circle</span>
<span class="text-caption font-medium">Confirmado</span>
</div>
</td>
<td class="px-lg py-lg text-right">
<div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-sm hover:bg-surface-variant rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-sm hover:bg-error-container hover:text-on-error-container rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<div class="flex flex-col">
<span class="font-title-lg text-body-md font-semibold text-primary">Matriz Nossa Sra. do Rosário</span>
<span class="text-caption text-on-surface-variant">Centro</span>
</div>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-sm">
<img alt="Pe. Francisco" class="w-8 h-8 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFeNtNL3fMM6nn3sJSVklxssmMTRx7rLwjWUxX-Hjqg8PmBXTcPUrrcAgxeIbs7i1UIxxQtW3gi2XjZi-W8oaRFCzoR3whapdYiULNjt8FpJNQq_5P_qLDoqVhhOApNUvc0WNnEF-N8oHeTcbtxxjAEjZc3L9P6lR7xROp7t_rL5ag-ephrGXf4t3zMiwsGBI2pdtAeuT4DSjz-_aHBBnMRnOwdst52nzDb6jfDKhPNi_nHePx_UqVycCEng7f1tXJNuWbyu0PEbc"/>
<span class="font-body-md text-body-md">Pe. Francisco</span>
</div>
</td>
<td class="px-lg py-lg">
<span class="px-md py-xs rounded-full bg-secondary-container text-on-secondary-container text-caption font-medium uppercase tracking-wider">Missa</span>
</td>
<td class="px-lg py-lg font-body-md text-body-md">Domingo</td>
<td class="px-lg py-lg font-body-md text-body-md font-bold text-primary">19:00</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-xs text-on-surface-variant">
<span class="material-symbols-outlined text-[16px]" data-icon="pending">pending</span>
<span class="text-caption font-medium">Pendente</span>
</div>
</td>
<td class="px-lg py-lg text-right">
<div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-sm hover:bg-surface-variant rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-sm hover:bg-error-container hover:text-on-error-container rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<div class="flex flex-col">
<span class="font-title-lg text-body-md font-semibold text-primary">Igreja Santa Luzia</span>
<span class="text-caption text-on-surface-variant">Mutirão</span>
</div>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-sm">
<img alt="Pe. Pedro" class="w-8 h-8 rounded-full" data-alt="A portrait of a young Catholic priest with a gentle and focused look, wearing a traditional black habit. The setting is a serene modern chapel with clean lines and soft botanical green accents in the background. The lighting is diffused and calm, reflecting a sense of peace and divine order. The image style is professional, high-end, and minimalist." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB37ZCZQOq1i_PmZVJs9V7H8cUUfzFqrsriWAAWssAtO3WTI96skSXM_PYV4UwKGaP9DLIAp9cr2WcNnHan6UHSniwMy1Q0Ei-3BxIzvP22J36KY_Ta2ZWSIrSwnEBzcJKDI1ihDSXmg9PB3NSgCsCXU8po9Cc73gmyzUOx-7ZunsjeRrcKze7gdavyhCFzVfj6JvR5ft3VQxxIdjbpb7I6-fmzAmvf0JwL72d_W6OwlUHjUv1JGx0QaVtO_bfjUrMEHCRBe_HFhDI"/>
<span class="font-body-md text-body-md">Pe. Pedro</span>
</div>
</td>
<td class="px-lg py-lg">
<span class="px-md py-xs rounded-full bg-surface-variant text-primary text-caption font-medium uppercase tracking-wider">Adoração</span>
</td>
<td class="px-lg py-lg font-body-md text-body-md">Quinta-feira</td>
<td class="px-lg py-lg font-body-md text-body-md font-bold text-primary">18:30</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-xs text-primary">
<span class="material-symbols-outlined text-[16px]" data-icon="check_circle">check_circle</span>
<span class="text-caption font-medium">Confirmado</span>
</div>
</td>
<td class="px-lg py-lg text-right">
<div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-sm hover:bg-surface-variant rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-sm hover:bg-error-container hover:text-on-error-container rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-lg py-md bg-surface-container-low/50 flex items-center justify-between">
<span class="text-caption text-on-surface-variant">Exibindo 4 de 42 horários cadastrados</span>
<div class="flex gap-xs">
<button class="p-sm rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="chevron_left">chevron_left</span>
</button>
<button class="p-sm rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Devotional Card -->
<div class="relative overflow-hidden glass-card p-xl rounded-2xl flex flex-col md:flex-row items-center gap-xl">
<div class="absolute -right-8 -bottom-8 opacity-5 text-primary scale-[5]">
<span class="material-symbols-outlined" data-icon="church">church</span>
</div>
<div class="flex-1">
<span class="font-label-md text-label-md text-primary uppercase tracking-widest mb-sm block">Versículo do Dia</span>
<h3 class="font-headline-md text-headline-md text-primary mb-md italic">"Vinde a mim, todos os que estais cansados e oprimidos, e eu vos aliviarei."</h3>
<p class="font-body-md text-body-md text-on-surface-variant">— Mateus 11:28</p>
</div>
<div class="shrink-0">
<div class="w-24 h-24 rounded-full border-4 border-secondary-container p-1 overflow-hidden">
<img alt="Icon" class="w-full h-full object-cover rounded-full" data-alt="A beautiful, minimalist digital illustration of a glowing cross surrounded by soft, abstract botanical shapes in varying shades of green. The lighting is ethereal and soft, creating a peaceful and spiritual mood. The composition is centered and symmetrical, fitting a high-end, serene religious brand aesthetic with a modern, airy feel." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCo-XqIWRnfNMk2AYFQXqaXlIdqreTaOiUPQtvr-HhN0-BwAVUfxsxbooJJTGGMl2LiB7pBdKRSbMs7MJntP5IhqiewW4Y3siULMOqPxLFJMQDh3jgY-GzuLTGP3t5RDeLHfKIlpa288afKbDOVKUmb_14I7DJ4SFwVylPFfK5gFee5jpt16QZBBNxJ9sAMnCW_BiAjHy4dl0ZTAPcEtI9-gEzjxkq5oeXqUanmBVsmtwuyXrEsE8iOqV4Y3PhIBEHA4ovpF8vo33s"/>
</div>
</div>
</div>
</section>
</main>
</div>
<!-- Micro-interaction Script -->
<script>
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('click', (e) => {
                // Prevent trigger if clicking actions
                if (e.target.closest('button')) return;
                
                // Visual feedback
                row.classList.add('scale-[0.995]');
                setTimeout(() => row.classList.remove('scale-[0.995]'), 150);
            });
        });

        // FAB logic (optional addition based on UI guidelines for task-focused context)
        // Hidden as per suppression rule for specific list pages if they act as sub-pages, 
        // but since this is a primary dashboard tab "Horários", we could have a FAB.
        // Guidelines say: "You MUST suppress the FAB on Settings, Profile, Details, and Transactional screens."
        // This is a "Listing" screen, so we keep the header button.
    </script>
</body></html>
