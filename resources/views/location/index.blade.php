@extends('layouts.app')

@section('title', 'Gestão das Igrejas')

@section('content')
<!-- Main Content Area -->
<section class="p-lg md:p-3xl max-w-max-content-width w-full mx-auto animate-in fade-in duration-700">
    <!-- Header Action Row -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-md mb-2xl">
        <div>
            <h3 class="font-headline-md text-headline-md text-on-background">Gestão de Unidades</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Visualize e gerencie todas as capelas,
                comunidades e a Igreja Matriz.</p>
        </div>
        <button
            class="flex items-center gap-sm bg-primary text-on-primary px-lg py-md rounded-xl font-label-md text-label-md shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all">
            <span class="material-symbols-outlined" data-icon="add">add</span>
            Nova Igreja
        </button>
    </div>
    <!-- Table Section -->
    <div class="glass-card rounded-xl overflow-hidden">
        <div class="p-lg border-b border-outline-variant/30 flex justify-between items-center">
            <div class="relative w-full max-w-md">
                <span
                    class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant"
                    data-icon="search">search</span>
                <input
                    class="w-full pl-2xl pr-md py-sm bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                    placeholder="Buscar por nome ou endereço..." type="text" />
            </div>
            <div class="flex gap-sm ml-md">
                <button class="p-sm text-on-surface-variant hover:bg-surface-container rounded-lg transition-colors">
                    <span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low/50">
                        <th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Nome</th>
                        <th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Comunidade
                        </th>
                        <th class="px-lg py-md font-label-md text-label-md text-on-surface-variant">Endereço
                        </th>
                        <th class="px-lg py-md font-label-md text-label-md text-on-surface-variant text-center">
                            Status</th>
                        <th class="px-lg py-md font-label-md text-label-md text-on-surface-variant text-right">
                            Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20">
                    <!-- Matriz -->
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-lg py-lg">
                            <div class="flex items-center gap-md">
                                <div
                                    class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A beautiful close-up of a white colonial Brazilian church facade with blue details. The sky is a clear, soft blue, and the lighting is bright and airy, reflecting a serene morning atmosphere. The architecture is traditional and well-maintained, representing the Matriz Church."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCoY7j89bdygvmROWOu3ORY9fD_5u5-SUM2Cv9xEsu_1hXKZks6RFDrneDiacUQQbj_9irrYQHO7N7qjZDuY5cdAMbmwoTVrCpZi5p22pG6MJYYFp3SKkCoJWKCVnRlUpdg78oCANIxTW5sUYLnOKbRiT5RIOJFQ4QgjheTXnqYr1A4PO4O1Ae6S4rhJOb-rf90VqxgGTHkOabNQqEd60uBb0AoT0JeoiqA5DTcbF5Z6jpVaLDTnHEFgr0z3TYZomW1v-xIRKxW0JM" />
                                </div>
                                <div class="font-title-lg text-body-md font-semibold text-on-background">Igreja
                                    Matriz do Rosário</div>
                            </div>
                        </td>
                        <td class="px-lg py-lg">
                            <span
                                class="px-sm py-xs bg-primary-container text-on-primary-container rounded-full text-caption font-label-md">Sede</span>
                        </td>
                        <td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">Praça
                            Monsenhor João Luís, s/n - Centro</td>
                        <td class="px-lg py-lg text-center">
                            <div class="inline-flex items-center gap-xs text-primary">
                                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                <span class="font-label-md text-label-md">Ativa</span>
                            </div>
                        </td>
                        <td class="px-lg py-lg text-right">
                            <div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-sm text-primary hover:bg-primary/10 rounded-lg"><span
                                        class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                <button class="p-sm text-on-surface-variant hover:bg-surface-container rounded-lg"><span
                                        class="material-symbols-outlined"
                                        data-icon="visibility">visibility</span></button>
                            </div>
                        </td>
                    </tr>
                    <!-- São Bento -->
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-lg py-lg">
                            <div class="flex items-center gap-md">
                                <div
                                    class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A simple and elegant small chapel located in a rural green setting. The building is painted in soft white and earth tones, surrounded by lush green grass and a few tropical trees. The lighting is warm golden hour sun, creating a peaceful community chapel aesthetic."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcak9MnERRQXihlUNzlvFsF_VLdUrIxS-9k9V9zPSD5duXLf71wW9gdkm2jELp-bE5Mu7Zd41ZTXbLaRuYPcmGFqFfFvYKclwypbk1NPPRBhMGCb-zKGbzIhJzpDG4hbcqlB78D-C9SDuKeLMoS-FfLoncftrh16MbKnTLEUYoQdfAcZhUKSvNqMelwnrZ-k6fsO5w-0tEUCs-A-ypfGSOus3MBra7dUdKWD-5uNTF7thfg8-o56pXW9kJQUvgaLuoal9XlFBS328" />
                                </div>
                                <div class="font-title-lg text-body-md font-semibold text-on-background">Capela
                                    de São Bento</div>
                            </div>
                        </td>
                        <td class="px-lg py-lg">
                            <span
                                class="px-sm py-xs bg-secondary-container text-on-secondary-container rounded-full text-caption font-label-md">Vila
                                Nova</span>
                        </td>
                        <td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">Rua São Bento,
                            450 - Vila Nova</td>
                        <td class="px-lg py-lg text-center">
                            <div class="inline-flex items-center gap-xs text-primary">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>
                                <span class="font-label-md text-label-md">Ativa</span>
                            </div>
                        </td>
                        <td class="px-lg py-lg text-right">
                            <div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-sm text-primary hover:bg-primary/10 rounded-lg"><span
                                        class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                <button class="p-sm text-on-surface-variant hover:bg-surface-container rounded-lg"><span
                                        class="material-symbols-outlined"
                                        data-icon="visibility">visibility</span></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Nossa Senhora das Dores -->
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-lg py-lg">
                            <div class="flex items-center gap-md">
                                <div
                                    class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Interior of a small parish community center and chapel. The space is clean and bright with wooden pews and a simple altar. Soft natural light fills the room through small side windows. The atmosphere is quiet, modest, and dedicated to community gathering."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6MgiZO_iR0fiTKkUdSSqFI1_rv9y5Xrd5ZESg3F_C0fvFJQ_1yUvM9K-2DxY8QVY7fuzoJxwoN9iZWkdbXE7d67I5hRIKOWNE4E0Z-NH-MfvLi7yCh91Tg7ocrNMYqk4f98TCDS1ruKX9dBVrN4xtSU8uNgHQkIpmrrl1VfUnvdW-Wf55iuNE5WwtSLJJKXsVYHDoTpcq3wrMUlFPo0khHkQgLYvvN29eSk5kxdYJ1MQAM-ba3uPhEn9tRXtVURbFEwNoyZh07mE" />
                                </div>
                                <div class="font-title-lg text-body-md font-semibold text-on-background">C.
                                    Nossa Sra. das Dores</div>
                            </div>
                        </td>
                        <td class="px-lg py-lg">
                            <span
                                class="px-sm py-xs bg-secondary-container text-on-secondary-container rounded-full text-caption font-label-md">Planalto</span>
                        </td>
                        <td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">Av. das
                            Flores, 1200 - Planalto</td>
                        <td class="px-lg py-lg text-center">
                            <div class="inline-flex items-center gap-xs text-on-surface-variant">
                                <span class="w-2 h-2 rounded-full bg-outline"></span>
                                <span class="font-label-md text-label-md">Em Reforma</span>
                            </div>
                        </td>
                        <td class="px-lg py-lg text-right">
                            <div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-sm text-primary hover:bg-primary/10 rounded-lg"><span
                                        class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                <button
                                    class="p-sm text-on-surface-variant hover:bg-surface-container rounded-lg"><span
                                        class="material-symbols-outlined"
                                        data-icon="visibility">visibility</span></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Santa Rita -->
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-lg py-lg">
                            <div class="flex items-center gap-md">
                                <div
                                    class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A modern architectural take on a small church, featuring clean lines and large glass panels that allow the green exterior landscape to be visible from inside. The design is minimalist and peaceful, using light wood and white plaster. The mood is contemporary yet deeply spiritual."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAieJMfUKsaU7wxOgW8nM_D6ocMfav1e02Ec3liOdebeYB84ptbtYlvELCwN-YBYlzerJSaIojzIQQel4mbZ91xOZdjT7wfrFzviz3ztUB7kUnGwLrn8rDqu0xM7Yg2TOpvdw9c6vxjBU-r2sWI6IIJY_evvfZqpEjHrkjLNN7uSwwDsdIFuSFsAL9_D9rHs3LQJ8AyXJT0xbTyrUpQuO_fMSfnSF-Gb--5484HqtNz9Ig6EAcy9lRW49gnD0V-K6uDdqSn7Ht7otE" />
                                </div>
                                <div class="font-title-lg text-body-md font-semibold text-on-background">Capela
                                    de Santa Rita</div>
                            </div>
                        </td>
                        <td class="px-lg py-lg">
                            <span
                                class="px-sm py-xs bg-secondary-container text-on-secondary-container rounded-full text-caption font-label-md">Jardins</span>
                        </td>
                        <td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">Rua da Paz, 33
                            - Bairro Jardins</td>
                        <td class="px-lg py-lg text-center">
                            <div class="inline-flex items-center gap-xs text-primary">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>
                                <span class="font-label-md text-label-md">Ativa</span>
                            </div>
                        </td>
                        <td class="px-lg py-lg text-right">
                            <div class="flex justify-end gap-sm opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-sm text-primary hover:bg-primary/10 rounded-lg"><span
                                        class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                <button
                                    class="p-sm text-on-surface-variant hover:bg-surface-container rounded-lg"><span
                                        class="material-symbols-outlined"
                                        data-icon="visibility">visibility</span></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div
            class="p-lg bg-surface-container-low/50 border-t border-outline-variant/30 flex justify-between items-center">
            <p class="font-caption text-caption text-on-surface-variant">Exibindo 4 de 12 igrejas cadastradas
            </p>
            <div class="flex gap-xs">
                <button
                    class="px-md py-sm rounded-lg border border-outline-variant text-label-md font-label-md disabled:opacity-50"
                    disabled="">Anterior</button>
                <button
                    class="px-md py-sm rounded-lg bg-primary text-on-primary text-label-md font-label-md">Próximo</button>
            </div>
        </div>
    </div>
</section>
</main>
<!-- Devotional Card - Float Bottom Right -->
<div
    class="fixed bottom-lg right-lg w-72 glass-card p-md rounded-xl z-50 hidden lg:block transform hover:-translate-y-2 transition-transform duration-300">
    <div class="absolute inset-0 opacity-5 pointer-events-none flex items-center justify-center">
        <span class="material-symbols-outlined text-[80px]" data-icon="church">church</span>
    </div>
    <h4 class="font-display font-bold text-headline-md text-primary mb-xs">Versículo do Dia</h4>
    <p class="font-body-md text-body-md text-on-surface-variant italic">"Onde dois ou três estiverem reunidos em meu
        nome, ali estou eu no meio deles."</p>
    <div class="mt-md flex items-center justify-between">
        <span class="text-caption font-label-md text-secondary">Mateus 18:20</span>
        <span class="material-symbols-outlined text-secondary" data-icon="auto_awesome">auto_awesome</span>
    </div>
</div>
<!-- Mobile Navigation (Bottom Bar) -->
<div
    class="md:hidden fixed bottom-0 left-0 right-0 bg-surface border-t border-outline-variant/30 flex justify-around p-sm z-50">
    <a class="flex flex-col items-center gap-xs p-xs text-on-surface-variant" href="#">
        <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
        <span class="text-[10px] font-label-md">Início</span>
    </a>
    <a class="flex flex-col items-center gap-xs p-xs text-primary font-bold" href="#">
        <span class="material-symbols-outlined" data-icon="church"
            style="font-variation-settings: 'FILL' 1;">church</span>
        <span class="text-[10px] font-label-md">Igrejas</span>
    </a>
    <a class="flex flex-col items-center gap-xs p-xs text-on-surface-variant" href="#">
        <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
        <span class="text-[10px] font-label-md">Padres</span>
    </a>
    <a class="flex flex-col items-center gap-xs p-xs text-on-surface-variant" href="#">
        <span class="material-symbols-outlined" data-icon="schedule">schedule</span>
        <span class="text-[10px] font-label-md">Horas</span>
    </a>
</div>
<script>
    // Micro-interactions and simple UI logic
    document.querySelectorAll('tr').forEach(row => {
        row.addEventListener('click', (e) => {
            if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'SPAN') {
                // Logic for selecting a row or opening details
                console.log('Row clicked');
            }
        });
    });

    // Search highlight logic (Visual only)
    const searchInput = document.querySelector('input[type="text"]');
    searchInput.addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
        });
    });
</script>
@endsection