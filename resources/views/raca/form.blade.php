@extends('layouts.base')
@section('content')
    <h1>
        @if ($raca)
            Editando Raça:{{ $raca->raca }}
        @else
            <div class="titulo">
                <h1> Cadastrar Raça </h1>
            </div>
        @endif

    </h1>
    <form action="{{ $raca ? route('raca.update', ['id' => $raca->id_raca]) : route('raca.store') }}" method="post"
        enctype="multipart/form-data" class="row g-3">
        @csrf

        <div class="row">
            <div class="col-md-2">
                <label for="id_tipo" class="form-label">Tipo*</label>
                <select name="id_tipo" id="id_tipo" class="form-select">
                    @foreach ($tipos::all() as $item)
                     <option value="{{$item->id_tipo}}"
                        @selected($raca && $raca->id_tipo == $item->id_tipo)
                        >
                        {{ $item->tipo }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="raca" class="form-label">Raca*</label>
                <input type="text" id="raca" name="raca" class="form-control"
                    value="{{ $raca ? $raca->raca : old('raca') }}" required>
            </div>



            <div class="col-md-2">
                <input class="btn btn-primary mt-4" type="submit" value="{{ $raca ? 'Atualizar' : 'Cadastrar' }}">
            </div>
    </form>

    <style>
        .titulo {
            height: 100px;
            display: flex;
            align-items: center;
            margin: center
        }

        label {
            font-size: 20px;
        }
    </style>
@endsection
@section('scripts')
    @parent
@endsection
