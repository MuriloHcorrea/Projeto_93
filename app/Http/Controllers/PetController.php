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
        $pets = Pet::orderBy('id_pet','desc')->paginate(10);
        return view('pet.index')
            ->with(compact('pets'));
    }
    public function create()
    {
        $pet = null;
        $sexos = Sexo::class;
        $racas = Raca::class;
        $portes = Porte::class;
        $cores =  Cor::class;
        return view('pet.form')->with(compact('pet','sexos','racas','portes','cores'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       // ($request->all());

        Pet::create($request->all());
       return redirect()->route('pet.index')->with('novo', 'pet cadastrado com sucesso!');

    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pet = Pet::with([
           'pet',
        ])->find($id);
        return view('pet.show')
            ->with(compact('pets'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $id)
    {
        $pet = Pet::find($id)->first();
        return view('pet.form')
            ->with(compact('pet'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Int $id)
      {
          $pet = Pet::find($id);
          $pet->update($request->all());
          return redirect()
              ->route('pet.index')
              ->with('atualizado', ' Pet Atualizado com sucesso!');
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
