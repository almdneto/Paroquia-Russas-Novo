<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::paginate(15);
        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validação dos dados que vêm do formulário
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        // 2. Tratamento do upload da foto
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('locations', 'public');
            
            // CORREÇÃO: Adiciona o caminho da imagem direto no array que será salvo
            $validated['image_path'] = $path;
        }

        // 3. Cria o registro com os dados validados (e com o image_path se houver)
        Location::create($validated);

        return redirect()->route('location.index')->with('success', 'Localização criada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Deleta a imagem antiga se ela existir
            if ($location->image_path) {
                Storage::disk('public')->delete($location->image_path);
            }
            // Salva a nova imagem
            $path = $request->file('image')->store('locations', 'public');
            $validated['image_path'] = $path;
        }

        // O seu método update já estava correto, usando $validated perfeitamente!
        $location->update($validated);

        return redirect()->route('location.index')->with('success', 'Localização atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        // Deleta a imagem do servidor antes de excluir o registro
        if ($location->image_path) {
            Storage::disk('public')->delete($location->image_path);
        }

        $location->delete();

        return redirect()->route('location.index')->with('success', 'Localização excluída com sucesso!');
    }
}