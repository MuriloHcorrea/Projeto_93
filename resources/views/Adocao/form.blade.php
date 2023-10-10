@extends('layouts.base')

@section('content')

<h1 class="mx-3 my-4" class="titulo">

    <i class="fa-solid fa-pen-to-square"></i>

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

    <div class="col-md-2">
        <label for="status_adocao" class="form-label">Status_adocao</label>
        <input type="status_adocao" id="status_adocao" name="status_adocao" value="{{
            $adocao ? $adocao->status_adocao :old('status_adocao') }}"required>>
    </div>

    {{-- <div class="col-md-2">
        <label for="status_adocao"  class="form-label">Status da adoção:</label>
        <select name="status_adocao" id="status_adocao" class="form-select">
            <option value="{{$adocaos::ANDAMENTO}}">EM ANDAMENTO</option>
            <option value="{{$adocaos::ADOTADO}}">ADOTADO</option>
        </select>
    </div> --}}

    <div class="col-md-3">
        <input class="btn btn-primary mt-4" type="submit"
        value="{{$adocao ?
        'Atualizar' :
        'Cadastrar'
        }}">
    </div>





</form>
<style>
    .titulo{
        margin: 30px 10px;
    }
    .titulo a{
        margin-left: 20px
    }
    #colunas{
        font-size: 17px
    }
</style>
@endsection

@section('scripts')

@parent

@endsection
