<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
</head>

<body class="bg-background text-on-surface font-body-md flex min-h-screen">
    <!-- SideNavBar Shell -->
    <aside
        class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant flex flex-col gap-lg p-lg overflow-y-auto">
        <div class="flex flex-col gap-xs mb-md">
            <h1 class="text-title-lg font-display font-bold text-primary">Paróquia Nossa Senhora do Rosário</h1>
            <p class="font-label-md text-on-surface-variant">Russas - CE</p>
        </div>
        <nav class="flex flex-col gap-sm flex-grow">
            <!-- Dashboard -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-md">Dashboard</span>
            </a>
            <!-- Usuários -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-label-md">Usuários</span>
            </a>
            <!-- Igrejas -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="church">church</span>
                <span class="font-label-md">Igrejas</span>
            </a>
            <!-- Padres (ACTIVE) -->
            <a class="flex items-center gap-md bg-secondary-container text-on-secondary-container rounded-xl px-md py-sm active-nav-pill"
                href="#">
                <span class="material-symbols-outlined" data-icon="account_circle"
                    style="font-variation-settings: 'FILL' 1;">account_circle</span>
                <span class="font-label-md">Padres</span>
            </a>
            <!-- Horários -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="schedule">schedule</span>
                <span class="font-label-md">Horários</span>
            </a>
        </nav>
        <div class="mt-auto border-t border-outline-variant pt-lg">
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-label-md">Sair</span>
            </a>
        </div>
    </aside>
    <!-- Main Canvas -->
    <main class="flex-grow flex flex-col">
        <!-- TopAppBar -->
        <header
            class="flex justify-between items-center w-full px-lg py-md h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
            <div class="flex items-center gap-md">
                <h2 class="font-display font-semibold text-primary font-title-lg text-title-lg">Padres</h2>
                <div class="h-6 w-[1px] bg-outline-variant mx-sm"></div>
                <span class="text-on-surface-variant font-body-md">Sacerdotes vinculados</span>
            </div>
            <div class="flex items-center gap-md">
                <div class="px-md py-xs bg-surface-container text-on-surface rounded-full text-label-md">Admin</div>
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-primary/20">
                    <img alt="User Profile Avatar"
                        data-alt="A professional and friendly portrait of a parish administrator in a modern office setting. The lighting is bright and warm, reflecting a serene and welcoming atmosphere. The colors are soft greens and whites, consistent with the ecclesiastical brand identity."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFWJneMEs4TaLEuVzAfaMwhI8vPk0oO13eduykBAE7MfTaSZuhErhrIw-4ZHDdkckVY4LswlUOb1svcmK_ySVRInJWeZQw8tUYUi5YgmHU4Sy79ur3y3yV8JAf9kTq2kwpcellub600hWVH0MyD8VmlqGj0G4afg32XyDngaUlrlGYJBA6iqsiqUhUrRb0OjwGQjhOEpphNGmTTwzcSv7W2V4WlrdmAAV-zeqkSKyUkek8tiBdRvs3372-bp_ZKB6v7GR7kC8SJK8" />
                </div>
            </div>
        </header>
        <!-- Content Area -->
        <section class="p-xl max-w-max-content-width mx-auto w-full">
            <!-- Action Row -->
            <div class="flex justify-between items-end mb-xl">
                <div class="space-y-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface">Gestão de Clero</h3>
                    <p class="text-on-surface-variant">Visualize e gerencie as informações dos sacerdotes da paróquia.
                    </p>
                </div>
                <button
                    class="bg-primary text-on-primary px-lg py-sm rounded-xl flex items-center gap-sm font-label-md hover:opacity-90 transition-all active:scale-95">
                    <span class="material-symbols-outlined text-[20px]" data-icon="add">add</span>
                    Novo Padre
                </button>
            </div>
            <!-- Bento Layout / Main Table Card -->
            <div
                class="bg-surface shadow-[0_4px_20px_rgba(21,128,61,0.05)] border border-outline-variant/20 rounded-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant/30">
                                <th class="px-lg py-md font-label-md">Nome</th>
                                <th class="px-lg py-md font-label-md">Telefone</th>
                                <th class="px-lg py-md font-label-md">E-mail</th>
                                <th class="px-lg py-md font-label-md">Status</th>
                                <th class="px-lg py-md font-label-md text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/20">
                            <!-- Priest Row 1 -->
                            <tr class="hover:bg-surface-bright transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold">
                                            JS
                                        </div>
                                        <div>
                                            <p class="font-title-lg text-body-md text-on-surface">Pe. João Silva</p>
                                            <p class="text-caption text-on-surface-variant">Pároco</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md">(88) 99876-5432</td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md">joao.silva@paroquia.org
                                </td>
                                <td class="px-lg py-md">
                                    <span
                                        class="px-sm py-xs bg-secondary-container text-on-secondary-container text-caption rounded-full font-medium">Ativo</span>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <div
                                        class="flex justify-end gap-sm opacity-60 group-hover:opacity-100 transition-opacity">
                                        <button class="p-xs hover:bg-surface-container rounded-lg text-primary"
                                            title="Editar">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded-lg text-error"
                                            title="Excluir">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Priest Row 2 -->
                            <tr class="hover:bg-surface-bright transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-tertiary-container flex items-center justify-center text-on-tertiary-container font-bold">
                                            AM
                                        </div>
                                        <div>
                                            <p class="font-title-lg text-body-md text-on-surface">Pe. Antônio Mendonça
                                            </p>
                                            <p class="text-caption text-on-surface-variant">Vigário</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md">(88) 98122-3344</td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md">antonio.m@paroquia.org</td>
                                <td class="px-lg py-md">
                                    <span
                                        class="px-sm py-xs bg-secondary-container text-on-secondary-container text-caption rounded-full font-medium">Ativo</span>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <div
                                        class="flex justify-end gap-sm opacity-60 group-hover:opacity-100 transition-opacity">
                                        <button class="p-xs hover:bg-surface-container rounded-lg text-primary"
                                            title="Editar">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded-lg text-error"
                                            title="Excluir">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Priest Row 3 -->
                            <tr class="hover:bg-surface-bright transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant font-bold">
                                            FL
                                        </div>
                                        <div>
                                            <p class="font-title-lg text-body-md text-on-surface">Pe. Francisco Lima</p>
                                            <p class="text-caption text-on-surface-variant">Residente</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md">(88) 99100-1122</td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md">francisco.lima@paroquia.org
                                </td>
                                <td class="px-lg py-md">
                                    <span
                                        class="px-sm py-xs bg-surface-container-high text-on-surface-variant text-caption rounded-full font-medium">Licenciado</span>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <div
                                        class="flex justify-end gap-sm opacity-60 group-hover:opacity-100 transition-opacity">
                                        <button class="p-xs hover:bg-surface-container rounded-lg text-primary"
                                            title="Editar">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded-lg text-error"
                                            title="Excluir">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination / Footer -->
                <div class="px-lg py-md flex items-center justify-between bg-surface-container-low">
                    <p class="text-caption text-on-surface-variant">Exibindo 3 de 3 sacerdotes</p>
                    <div class="flex gap-xs">
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant/30 text-on-surface-variant opacity-50 cursor-not-allowed">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary text-on-primary font-label-md">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant/30 text-on-surface-variant hover:bg-surface-container transition-colors">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Devotional Card - Secondary Content -->
            <div class="mt-3xl grid grid-cols-1 md:grid-cols-2 gap-xl">
                <div
                    class="bg-surface-container-lowest p-xl rounded-xl border border-primary/10 relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -bottom-4 opacity-5 pointer-events-none group-hover:scale-110 transition-transform duration-700">
                        <span class="material-symbols-outlined text-[160px]" data-icon="church">church</span>
                    </div>
                    <h4 class="font-headline-md text-primary mb-md relative z-10">Missão Sacerdotal</h4>
                    <p class="text-body-md text-on-surface-variant italic relative z-10">
                        "O sacerdócio é o amor do Coração de Jesus. Quando vedes o padre, pensai em Nosso Senhor Jesus
                        Cristo."
                    </p>
                    <p class="text-caption text-primary mt-sm font-semibold relative z-10">— São João Maria Vianney</p>
                </div>
                <div class="bg-primary-container p-xl rounded-xl flex flex-col justify-between">
                    <div>
                        <h4 class="font-headline-md text-on-primary-container mb-xs">Relatórios do Clero</h4>
                        <p class="text-on-primary-container/80 text-body-md">Gere relatórios detalhados de atividades e
                            histórico paroquial de cada sacerdote.</p>
                    </div>
                    <button
                        class="mt-lg w-fit px-md py-sm bg-on-primary-container text-primary-container rounded-lg font-label-md hover:bg-white transition-colors">
                        Gerar Documentos
                    </button>
                </div>
            </div>
        </section>
    </main>
    <script>
        // Simple click interaction for the 'Novo Padre' button
        document.querySelector('button')?.addEventListener('click', function () {
            this.classList.add('scale-95');
            setTimeout(() => this.classList.remove('scale-95'), 150);
        });

        // Add subtle hover effect to table rows
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.style.transform = 'translateX(4px)';
                row.style.transition = 'transform 0.3s ease';
            });
            row.addEventListener('mouseleave', () => {
                row.style.transform = 'translateX(0)';
            });
        });
    </script>
</body>

</html>
