<!DOCTYPE html>

<html class="light" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Usuários - Paróquia Nossa Senhora do Rosário</title>
    
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
</head>

<body class="bg-background font-body-md text-on-surface flex min-h-screen">
    <!-- SideNavBar -->
    <aside
        class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant flex flex-col gap-lg p-lg transition-all">
        <div class="flex flex-col gap-xs">
            <h1 class="text-title-lg font-display font-bold text-primary">Paróquia Nossa Senhora do Rosário</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">Russas - CE</p>
        </div>
        <nav class="flex flex-col gap-sm flex-1">
            <!-- Dashboard -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
            <!-- Usuários (Active) -->
            <a class="flex items-center gap-md bg-secondary-container text-on-secondary-container rounded-xl px-md py-sm scale-98 transition-transform duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="group"
                    style="font-variation-settings: 'FILL' 1;">group</span>
                <span class="font-label-md text-label-md">Usuários</span>
            </a>
            <!-- Igrejas -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="church">church</span>
                <span class="font-label-md text-label-md">Igrejas</span>
            </a>
            <!-- Padres -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
                <span class="font-label-md text-label-md">Padres</span>
            </a>
            <!-- Horários -->
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-high transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="schedule">schedule</span>
                <span class="font-label-md text-label-md">Horários</span>
            </a>
        </nav>
        <div class="pt-lg border-t border-outline-variant/30">
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-error-container/20 hover:text-error transition-colors rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-label-md text-label-md">Sair</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="flex-1 flex flex-col min-w-0">
        <!-- TopAppBar -->
        <header
            class="flex justify-between items-center w-full px-lg py-md h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
            <div class="flex items-center gap-md">
                <h2 class="font-display font-semibold text-primary font-title-lg text-title-lg">Paróquia Nossa Senhora
                    do Rosário</h2>
            </div>
            <div class="flex items-center gap-md">
                <div class="flex flex-col items-end">
                    <span class="font-label-md text-label-md text-primary font-bold">Admin</span>
                    <span class="text-caption font-caption text-on-surface-variant">Gestor do Sistema</span>
                </div>
                <div
                    class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center overflow-hidden border border-outline-variant/50">
                    <img alt="User Profile Avatar" class="w-full h-full object-cover"
                        data-alt="A professional headshot illustration of a friendly male administrator wearing a minimalist clerical collar, set against a soft green background. The style is clean, modern, and digitally rendered with soft lighting and a focus on approachable professional character design for a church management app."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwWwA0jWv5pdKxawuq5j637to5pkY5wdcG7sZbWepBO0iff_UWRvueWlJ5c0ALAyeM6gIHQTp-cI7sMwceMI8huzprhhsFJZQGxH72ku-LVSEoJH_SyVz6H1uMnTdCzC2PquwF6eVANxxQvQMGoaltXHemXrxJ6nmEW6yKgTvHcTUuAUoH4y2yetck5l3P-7HD7pFCk0ZZbCcGOgRmFGyyD3gD2I-0L7n2mlKkstIxTATfToVEybyqqvz7k8Ek0WeXHFMSL8nWlak" />
                </div>
            </div>
        </header>
        <!-- Page Canvas -->
        <div class="p-xl max-w-max-content-width w-full mx-auto space-y-xl">
            <!-- Header Section -->
            <section class="flex flex-col md:flex-row justify-between items-start md:items-center gap-md">
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Usuários</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">Gerenciamento de acessos ao sistema
                        paroquial.</p>
                </div>
                <button
                    class="flex items-center gap-sm bg-primary text-on-primary px-lg py-md rounded-xl font-label-md text-label-md hover:opacity-90 transition-all shadow-md active:scale-95">
                    <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
                    Novo Usuário
                </button>
            </section>
            <!-- Table Container -->
            <section class="glass-card rounded-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant/30">
                                <th class="px-lg py-md font-label-md text-label-md">Nome</th>
                                <th class="px-lg py-md font-label-md text-label-md">E-mail</th>
                                <th class="px-lg py-md font-label-md text-label-md">Nível de acesso</th>
                                <th class="px-lg py-md font-label-md text-label-md">Status</th>
                                <th class="px-lg py-md font-label-md text-label-md text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/20">
                            <!-- User 1 -->
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-tertiary-fixed-dim flex items-center justify-center text-on-tertiary-fixed font-bold">
                                            AM</div>
                                        <span class="font-body-md text-body-md text-on-surface font-medium">Antônio
                                            Mendes</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md text-body-md">
                                    antonio.mendes@paroquia.org</td>
                                <td class="px-lg py-md">
                                    <span
                                        class="px-sm py-xs bg-primary-container/20 text-on-primary-fixed-variant rounded-full text-caption font-caption font-semibold uppercase tracking-wider">Admin</span>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs text-primary">
                                        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                        <span class="text-caption font-caption font-medium">Ativo</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button
                                            class="p-xs text-on-surface-variant hover:text-primary transition-colors"
                                            title="Editar">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs text-on-surface-variant hover:text-error transition-colors"
                                            title="Excluir">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- User 2 -->
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold">
                                            ML</div>
                                        <span class="font-body-md text-body-md text-on-surface font-medium">Maria Lúcia
                                            Silva</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md text-body-md">
                                    maria.lucia@paroquia.org</td>
                                <td class="px-lg py-md">
                                    <span
                                        class="px-sm py-xs bg-secondary-container/30 text-on-secondary-container rounded-full text-caption font-caption font-semibold uppercase tracking-wider">Editor</span>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs text-primary">
                                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                                        <span class="text-caption font-caption font-medium">Ativo</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button
                                            class="p-xs text-on-surface-variant hover:text-primary transition-colors"
                                            title="Editar">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs text-on-surface-variant hover:text-error transition-colors"
                                            title="Excluir">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- User 3 -->
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-surface-variant flex items-center justify-center text-on-surface-variant font-bold">
                                            FR</div>
                                        <span class="font-body-md text-body-md text-on-surface font-medium">Francisco
                                            Ribeiro</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md text-body-md">
                                    f.ribeiro@provider.com</td>
                                <td class="px-lg py-md">
                                    <span
                                        class="px-sm py-xs bg-secondary-container/30 text-on-secondary-container rounded-full text-caption font-caption font-semibold uppercase tracking-wider">Editor</span>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs text-on-surface-variant">
                                        <span class="w-2 h-2 rounded-full bg-outline-variant"></span>
                                        <span class="text-caption font-caption font-medium">Inativo</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button
                                            class="p-xs text-on-surface-variant hover:text-primary transition-colors"
                                            title="Editar">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs text-on-surface-variant hover:text-error transition-colors"
                                            title="Excluir">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- User 4 -->
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed font-bold">
                                            TS</div>
                                        <span class="font-body-md text-body-md text-on-surface font-medium">Tereza de
                                            Souza</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant font-body-md text-body-md">
                                    tereza.souza@paroquia.org</td>
                                <td class="px-lg py-md">
                                    <span
                                        class="px-sm py-xs bg-secondary-container/30 text-on-secondary-container rounded-full text-caption font-caption font-semibold uppercase tracking-wider">Editor</span>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs text-primary">
                                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                                        <span class="text-caption font-caption font-medium">Ativo</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button
                                            class="p-xs text-on-surface-variant hover:text-primary transition-colors"
                                            title="Editar">
                                            <span class="material-symbols-outlined text-[20px]"
                                                data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-xs text-on-surface-variant hover:text-error transition-colors"
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
                <!-- Pagination -->
                <div
                    class="px-lg py-md bg-surface-container-lowest border-t border-outline-variant/30 flex items-center justify-between">
                    <span class="text-caption font-caption text-on-surface-variant">Mostrando 4 de 12 usuários</span>
                    <div class="flex items-center gap-sm">
                        <button
                            class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors disabled:opacity-30"
                            disabled="">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <span class="font-label-md text-label-md text-primary font-bold">1</span>
                        <button
                            class="p-xs text-on-surface-variant hover:bg-surface-container-low rounded transition-colors">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Devotional Contextual Card (Bento Style) -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-lg">
                <div
                    class="md:col-span-2 glass-card p-lg rounded-xl flex flex-col justify-center relative overflow-hidden group">
                    <div
                        class="absolute -right-8 -bottom-8 opacity-5 text-primary transform group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[160px]" data-icon="church">church</span>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary mb-sm">Conselho Paroquial</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-lg">
                        Lembre-se que o acesso administrativo deve ser concedido apenas a membros ativos do conselho e
                        funcionários autorizados pela secretaria paroquial.
                    </p>
                </div>
                <div
                    class="bg-primary text-on-primary p-lg rounded-xl flex flex-col justify-between shadow-lg relative overflow-hidden">
                    <div class="z-10">
                        <span class="material-symbols-outlined mb-md block text-[32px]"
                            data-icon="security">security</span>
                        <h4 class="font-title-lg text-title-lg mb-xs">Segurança de Dados</h4>
                        <p class="text-caption font-caption text-on-primary-container">Auditoria de acessos realizada
                            semanalmente.</p>
                    </div>
                    <a class="mt-lg font-label-md text-label-md underline underline-offset-4 z-10 hover:opacity-80"
                        href="#">Ver logs de acesso</a>
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <span class="material-symbols-outlined text-[64px]" data-icon="lock_open">lock_open</span>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer / Feedback -->
        <footer class="mt-auto px-xl py-lg text-center text-caption font-caption text-on-surface-variant/60">
            © 2024 Paróquia Nossa Senhora do Rosário. Desenvolvido para a comunidade.
        </footer>
    </main>
    <!-- Micro-interaction Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Add subtle ripple-like effect to buttons
            const buttons = document.querySelectorAll('button');
            buttons.forEach(btn => {
                btn.addEventListener('mousedown', function () {
                    this.style.transform = 'scale(0.96)';
                });
                btn.addEventListener('mouseup', function () {
                    this.style.transform = 'scale(1)';
                });
                btn.addEventListener('mouseleave', function () {
                    this.style.transform = 'scale(1)';
                });
            });

            // Smooth fade-in for table rows
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateY(10px)';
                setTimeout(() => {
                    row.style.transition = 'all 0.4s ease-out';
                    row.style.opacity = '1';
                    row.style.transform = 'translateY(0)';
                }, 100 * index);
            });
        });
    </script>
</body>

</html>