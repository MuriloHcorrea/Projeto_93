<?php

namespace App\Http\Controllers;

use App\Models\Adocao;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pet;
use App\Models\Tipo;
use App\Models\User;
class AdocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adocoes = Adocao::with([
            'pet',
            'cliente'
        ])->orderBy('id_adocao','desc');

    return view('adocao.index')
        ->with(compact('adocoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adocao = null;
        $clientes = Cliente::orderBy('nome', 'asc')->get();
        $pets = Pet::orderBy('nome', 'asc')->get();
        return view('adocao.form')->with(compact(
            'adocao',
            'clientes',
            'pets'

        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //data-url="{{ route() }}"

        $adocao = Adocao::create($request->all());
        //dd($adocao);
        return redirect()->route('adocao.index')->with('novo', 'Adoção cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $adocao = Adocao::find($id);
        return view('adocao.show')->with(compact('adocao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $adocao   = Adocao::find($id)->first();
        $clientes = Cliente::orderBy('nome', 'asc')->get();
        $pets = Pet::orderBy('nome', 'asc')->get();
        return view('adocao.form')->with(compact(
            'adocao',
            'clientes',
            'pets'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $adocao = Adocao::find($id);
        $adocao->update($request->all());

        $clientes = Cliente::find($id);
        $clientes->update($request->all());

        return redirect()
            ->route('adocao.index')
            ->with('atualizado', ' Status de adoção atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Adocao::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
