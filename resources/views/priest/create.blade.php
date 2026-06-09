@extends('layouts.app')

@section('title', 'Cadastrar Sacerdote')

@section('content')
    <div class="p-xl flex-grow flex flex-col items-center gap-xl overflow-y-auto">
        <div class="w-full max-w-content-width">
            <div class="mb-xl">
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Preencha os dados abaixo para cadastrar um sacerdote no sistema paroquial.
                </p>
            </div>

            <form class="grid grid-cols-1 md:grid-cols-12 gap-lg" action="{{ route('priests.store') }}" method="POST">
                @csrf

                <div
                    class="md:col-span-8 bg-surface-container-lowest p-xl rounded-xl border border-outline-variant/20 shadow-soft">
                    <div class="flex items-center gap-sm mb-lg border-b border-outline-variant/20 pb-sm">
                        <span class="material-symbols-outlined text-secondary" data-icon="badge">badge</span>
                        <h3 class="font-title-lg text-title-lg text-primary">Informações do Sacerdote</h3>
                    </div>

                    <div class="grid grid-cols-1 gap-lg">
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface-variant" for="name">
                                Nome Completo
                            </label>
                            <input
                                class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none"
                                id="name" name="name" placeholder="Ex: Pe. José da Silva" type="text"
                                value="{{ old('name') }}" maxlength="100" required />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface-variant" for="function">
                                Função
                            </label>
                            <div class="relative">
                                <select
                                    class="w-full cursor-pointer bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg pl-md pr-11 py-sm transition-all font-body-md text-body-md outline-none appearance-none"
                                    id="function" name="function" required>
                                    <option value="" disabled @selected(old('function') === null)>Selecione uma função</option>
                                    <option value="Pároco" @selected(old('function') === 'Pároco')>Pároco</option>
                                    <option value="Vigário Paroquial" @selected(old('function') === 'Vigário Paroquial')>Vigário Paroquial</option>
                                    <option value="Diácono" @selected(old('function') === 'Diácono')>Diácono</option>
                                    <option value="Administrador Paroquial" @selected(old('function') === 'Administrador Paroquial')>Administrador Paroquial</option>
                                    <option value="Sacerdote Visitante" @selected(old('function') === 'Sacerdote Visitante')>Sacerdote Visitante</option>
                                </select>
                                <span
                                    class="material-symbols-outlined pointer-events-none absolute right-md top-1/2 -translate-y-1/2 text-outline-variant">
                                    expand_more
                                </span>
                            </div>
                            @error('function')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="md:col-span-4 flex flex-col gap-lg">
                    <div
                        class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant/20 shadow-soft flex-grow">
                        <div class="flex items-center gap-sm mb-md">
                            <span class="material-symbols-outlined text-secondary" data-icon="call">call</span>
                            <h3 class="font-title-lg text-title-lg text-primary">Contato</h3>
                        </div>

                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface-variant" for="cellphone">
                                Celular / WhatsApp
                            </label>
                            <input
                                class="w-full bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg px-md py-sm transition-all font-body-md text-body-md outline-none"
                                id="cellphone" name="cellphone" placeholder="(88) 99999-9999" type="tel"
                                value="{{ old('cellphone') }}" maxlength="20" required />
                            @error('cellphone')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div
                        class="bg-primary-container p-lg rounded-xl border border-primary/20 shadow-soft relative overflow-hidden flex flex-col gap-sm">
                        <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-white/10 text-9xl"
                            data-icon="church">church</span>
                        <h4 class="font-headline-md text-headline-md text-on-primary-container font-display relative z-10">
                            Lembrete
                        </h4>
                        <p class="font-body-md text-body-md text-on-primary-container/80 relative z-10 italic">
                            Mantenha os dados de contato atualizados para facilitar a organização paroquial.
                        </p>
                    </div>
                </div>

                <div class="md:col-span-12 flex justify-end items-center gap-lg mt-md">
                    <a href="{{ route('priests.index') }}"
                        class="px-xl py-md rounded-xl font-label-md text-label-md text-primary hover:bg-surface-container-high transition-all active:scale-95">
                        Cancelar
                    </a>
                    <button
                        class="px-xl py-md bg-primary cursor-pointer text-on-primary rounded-xl font-label-md text-label-md shadow-md hover:bg-surface-tint transition-all active:scale-95 flex items-center gap-sm"
                        type="submit">
                        <span class="material-symbols-outlined text-[20px]" data-icon="save">save</span>
                        Salvar Sacerdote
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
