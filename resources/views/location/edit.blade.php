@extends('layouts.app')

@section('title', 'Editar Localização')

@section('content')
    <main class="p-lg md:p-3xl max-w-max-content-width mx-auto w-full">

        <div class="mb-xl">
            <div class="flex items-center gap-sm text-primary mb-sm">
                <span class="material-symbols-outlined">location_on</span>
                <span class="font-label-md text-label-md uppercase tracking-wider">
                    Gestão de Localizações
                </span>
            </div>

            <h1 class="font-headline-lg text-headline-lg font-display mb-sm">
                Editar Localização
            </h1>

            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                Edite as informações da localização.
            </p>
        </div>

        <div
            class="bg-white rounded-xl border border-secondary-fixed/30 shadow-[0_4px_20px_rgba(21,128,61,0.05)] p-lg md:p-xl overflow-hidden relative">

            <span
                class="material-symbols-outlined absolute -bottom-12 -right-12 text-[200px] text-primary/5 select-none pointer-events-none">
                location_on
            </span>

            <form action="{{ route('location.update', $location) }}" method="POST" class="space-y-lg relative z-10">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">

                    {{-- Nome --}}
                    <div class="flex flex-col gap-sm">
                        <label for="name" class="font-label-md text-label-md text-on-surface">
                            Nome
                        </label>

                        <input type="text" id="name" name="name" value="{{ old('name', $location->name) }}"
                            placeholder="Ex: Capela de Santo Antônio"
                            class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm" required>

                        @error('name')
                            <span class="text-red-500 text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Endereço --}}
                    <div class="flex flex-col gap-sm">
                        <label for="address" class="font-label-md text-label-md text-on-surface">
                            Endereço
                        </label>

                        <input type="text" id="address" name="address" value="{{ old('address', $location->address) }}"
                            placeholder="Rua, Número, Bairro"
                            class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm" required>

                        @error('address')
                            <span class="text-red-500 text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Descrição --}}
                    <div class="flex flex-col gap-sm md:col-span-2">
                        <label for="description" class="font-label-md text-label-md text-on-surface">
                            Descrição
                        </label>

                        <textarea id="description" name="description" rows="4"
                            placeholder="Informações adicionais sobre a localização..."
                            class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm">{{ old('description', $location->description) }}</textarea>

                        @error('description')
                            <span class="text-red-500 text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Imagem --}}
                    <div class="flex flex-col gap-sm md:col-span-2">
                        <label for="image" class="font-label-md text-label-md text-on-surface">
                            Imagem
                        </label>

                        @if($location->image)
                            <div class="mb-md">
                                <img src="{{ asset('storage/' . $location->image) }}" alt="{{ $location->name }}"
                                    class="w-full max-w-xs h-auto rounded-lg border border-outline-variant/60">
                            </div>
                        @endif

                        <input type="file" id="image" name="image" accept="image/*"
                            class="w-full bg-white border border-outline-variant/60 rounded-lg px-md py-sm">

                        @error('image')
                            <span class="text-red-500 text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                </div>

                <div
                    class="flex flex-col sm:flex-row items-center justify-end gap-md pt-lg mt-lg border-t border-outline-variant/30">

                    <a href="{{ route('location.index') }}"
                        class="w-full sm:w-auto px-xl py-sm rounded-full font-label-md text-label-md text-primary border border-primary/20 hover:bg-on-primary-container transition-all text-center">
                        Cancelar
                    </a>

                    <button type="submit"
                        class="w-full sm:w-auto px-xl py-sm rounded-full font-label-md text-label-md bg-primary text-white hover:opacity-90 shadow-sm active:scale-95 transition-all">
                        Atualizar
                    </button>

                </div>
            </form>
        </div>

    </main>
@endsection