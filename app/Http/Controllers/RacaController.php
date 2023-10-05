<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use App\Models\Tipo;
use App\Models\Raca;
use Illuminate\Http\Request;


class RacaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $racas = Raca::orderBy('id_raca','desc')->paginate(10);
        return view('raca.index')->with(compact('racas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $pet = null;
        $racas = Raca::class;
        $tipos = Tipo::class;
        return view('raca.form')->with(compact('racas','tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Raca::create($request->all());
       return redirect()->route('raca.index')->with('nova', 'raca cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Raca $raca)
    {
        $raca = Pet::with([
            'id_raca',
            'id_raca',
        ])->find($id);
        return view('raca.show')

            ->with(compact('raca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Raca $raca)
    {

        $raca = Raca::find($id)->first();

        return view('raca.form')

            ->with(compact('raca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Raca $raca)
    {
        $raca = Raca::find($id);
          $raca->update($request->all());
          return redirect()
              ->route('raca.index')
              ->with('atualizado', ' Raças Atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Raca $raca)
    {
        Raca::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
