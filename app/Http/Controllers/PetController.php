<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use App\Models\{
    Sexo,
    Raca,
    Cor,
    Porte,
    User,
    HistoricoPet
};

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::orderBy('nome')->paginate(10);
        return view('pet.index')
            ->with(compact('pets'));
    }
    public function create()
    {
        $cliente = null;
        return view('cliente.form')->with(compact('cliente'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        Pet::create($request->all());
       return redirect()->route('cliente.index')->with('novo', 'Cliente cadastrado com sucesso!');

    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pets = Pet::with([
           'pet',
        ])->find($id);
        return view('pet.show')
            ->with(compact('pets'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Pet::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
