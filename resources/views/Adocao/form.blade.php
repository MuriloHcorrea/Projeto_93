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

        <label for="id_cliente" class="form-label">Cliente*</label>

        <select id="id_cliente" class="form-select" required>

            <option value="">Escolha...</option>
                @foreach ($clientes::orderBy('id_cliente')->get() as $cliente )
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






</form>

@endsection

@section('scripts')

@parent

@endsection
