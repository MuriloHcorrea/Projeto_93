@extends('layouts.base')

@section('content')

<h1 class="mx-3 my-4">

    <i class="bi bi-wallet2"></i>

    @if ($adocao)

    Editar adocao:

    Nº {{ $adocao->id_adocao}}

    @else

    Nova Adoção:

    @endif

</h1>

<form action="{{

        $adocao?

        route('adocao.update',['id'=>$adocao->id_adocao]):

        route('adocao.store')

    }}" method="post" enctype="multipart/form-data" class="row g-3">

    @csrf


    <div class="col-md-3">


        <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">

        <input type="hidden" name="status_adocao" value="Adotado">

        <label for="id_cliente" class="form-label">Cliente*</label>

        <select id="id_cliente" name="id_cliente" class="form-select" required>

            <option value="">Escolha...</option>
                @foreach ($clientes as $cliente )
                    <option value="{{$cliente->id_cliente}}"
                        @selected(
                            (
                                $adocao &&
                                $adocao->id_cliente == $cliente->id_cliente
                            )
                            ||
                            old('id_cliente') == $cliente->id_cliente
                        )
                    >
                        {{ $cliente->nome}}
                    </option>

                @endforeach

        </select>

    </div>


    <div class="col-md-3">

        <label for="id_pet" class="form-label">Pet*</label>

        <select id="id_pet" name="id_pet" class="form-select" required>

            <option value="">Escolha...</option>
                @foreach ($pets as $pet )
                    <option value="{{$pet->id_pet}}"
                        @selected(
                            (
                                $adocao &&
                                $adocao->id_pet == $pet->id_pet
                            )
                            ||
                            old('id_pet') == $pet->id_pet
                        )
                    >
                        {{ $pet->nome}}
                    </option>

                @endforeach

        </select>

    </div>

    <div class="col-md-3">
        <input class="btn btn-primary mt-4" type="submit"
        value="{{$adocao ?
        'Atualizar' :
        'Cadastrar'
        }}">
    </div>





</form>

@endsection

@section('scripts')

@parent

@endsection
