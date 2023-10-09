<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{

    Pet,
    Tipo,
    Raca

};

class RacaController extends Controller
{
    /**

     * Display a listing of the resource.

     */

    public function index()

    {
        $racas = Raca::orderBy('id_raca', 'desc')->paginate(10);

        return view('raca.index')->with(compact('racas'));

    }

    /**

     * Show the form for creating a new resource.

     */

    public function create()

    {

        $raca = null;

        $tipos = Tipo::class;

        return view('raca.form')

            ->with(

                compact(

                    'raca',

                    'tipos'

                )

            );

    }



    /**

     * Store a newly created resource in storage.

     */

    public function store(Request $request)

    {

        Raca::create($request->all());

        return redirect()

            ->route('raca.index')

            ->with('nova', 'raca cadastrado com sucesso!');

    }



    /**

     * Display the specified resource.

     */

    public function show(int $id)

    {

        $raca = Raca::with([

            'pet',

            'tipo',

        ])->find($id);



        return view('raca.show')

            ->with(compact('raca'));

    }



    /**

     * Show the form for editing the specified resource.

     */

    public function edit(int $id)

    {

        $raca = Raca::find($id);

        $tipos = Tipo::class;

        return view('raca.form')

            ->with(

                compact(

                    'raca',

                    'tipos'

                )

            );

    }



    /**

     * Update the specified resource in storage.

     */

    public function update(Request $request, int $id)

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

    public function destroy(int $id)

    {

        Raca::find($id)->delete();

        return redirect()

            ->back()

            ->with('excluido', 'Excluído com sucesso!');

    }

}
