<aside
    class="w-sidebar-width h-screen sticky top-0 left-0 bg-surface border-r border-outline-variant flex flex-col gap-lg p-lg transition-all">

    <div class="flex flex-col gap-xs">
        <h1 class="text-title-lg font-display font-bold text-primary">
            Paróquia Nossa Senhora do Rosário
        </h1>
        <p class="font-label-md text-label-md text-on-surface-variant">
            Russas - CE
        </p>
    </div>

    <nav class="flex flex-col gap-sm flex-1">

        {{-- Usuários --}}
        <a href="{{ route('users.index') }}" class="flex items-center gap-md px-md py-sm rounded-xl transition-colors
            {{ request()->routeIs('users.*')
    ? 'bg-secondary-container text-on-secondary-container scale-98 transition-transform duration-200'
    : 'text-on-surface-variant hover:bg-surface-container-high' }}">

            <span class="material-symbols-outlined" @if (request()->routeIs('users.*'))
            style="font-variation-settings: 'FILL' 1;" @endif>
                group
            </span>

            <span class="font-label-md text-label-md">Usuários</span>
        </a>

        {{-- Igrejas --}}
        <a href="{{ route('churches.index') }}" class="flex items-center gap-md px-md py-sm rounded-xl transition-colors
            {{ request()->routeIs('churches.*')
    ? 'bg-secondary-container text-on-secondary-container scale-98 transition-transform duration-200'
    : 'text-on-surface-variant hover:bg-surface-container-high' }}">

            <span class="material-symbols-outlined" @if (request()->routeIs('churches.*'))
            style="font-variation-settings: 'FILL' 1;" @endif>
                church
            </span>

            <span class="font-label-md text-label-md">Igrejas</span>
        </a>

        {{-- Padres --}}
        <a href="{{ route('priests.index') }}" class="flex items-center gap-md px-md py-sm rounded-xl transition-colors
            {{ request()->routeIs('priests.*')
    ? 'bg-secondary-container text-on-secondary-container scale-98 transition-transform duration-200'
    : 'text-on-surface-variant hover:bg-surface-container-high' }}">

            <span class="material-symbols-outlined" @if (request()->routeIs('priests.*'))
            style="font-variation-settings: 'FILL' 1;" @endif>
                account_circle
            </span>

            <span class="font-label-md text-label-md">Padres</span>
        </a>

        {{-- Horários --}}
        <a href="{{ route('calendar.index') }}" class="flex items-center gap-md px-md py-sm rounded-xl transition-colors
            {{ request()->routeIs('calendar.*')
    ? 'bg-secondary-container text-on-secondary-container scale-98 transition-transform duration-200'
    : 'text-on-surface-variant hover:bg-surface-container-high' }}">

            <span class="material-symbols-outlined" @if (request()->routeIs('calendar.*'))
            style="font-variation-settings: 'FILL' 1;" @endif>
                schedule
            </span>

            <span class="font-label-md text-label-md">Horários</span>
        </a>

    </nav>

    <div class="pt-lg border-t border-outline-variant/30">

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit"
                class="w-full flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-error-container/20 hover:text-error transition-colors rounded-xl cursor-pointer">

                <span class="material-symbols-outlined">logout</span>
                <span class="font-label-md text-label-md">Sair</span>

            </button>
        </form>

    </div>
</aside>