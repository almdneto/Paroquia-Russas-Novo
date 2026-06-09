<?php

namespace App\Http\Controllers;

use App\Models\Priest;
use Illuminate\Http\Request;

class PriestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $priests = Priest::paginate(15);
        return view('priest.index', compact('priests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('priest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'function' => ['required', 'string', 'max:50'],
            'cellphone' => ['required', 'string', 'max:20', 'unique:priests,cellphone'],
        ]);

        Priest::create($validated);

        return redirect()->route('priests.index')->with('success', 'Sacerdote cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
