@extends('layouts.base')
@section('content')
    <h1>
        @if ($raca)
            Editando Raças:

            {{ $raca->nome }}
        @else
           <div class="titulo">
            <h1> Cadastrar Raça  </h1>
           </div>
        @endif

    </h1>
    <form action="{{ $raca ? route('raca.update', ['id' => $raca->id_raca]) : route('raca.store') }}" method="post"
        enctype="multipart/form-data" class="row g-3">
        @csrf

        <div class="row">

            <input type="hidden" name="id_porte" value="1">
            <input type="hidden" name="id_raca" value="1">
            <input type="hidden" name="id_cor" value="1">
            <input type="hidden" name="id_sexo" value="1">
            <input type="hidden" name="id_historico" value="1">
            <input type="hidden" name="id_user" value="1">
            <input type="hidden" name="status_adocao" value="Adotado">

        <div class="col-md-2">
            <label for="id_raca"  class="form-label">Raça</label>
            <select name="id_raca" id="id_raca" class="form-select">
                    <option value="{{$racas::GOLDEN}}">GOLDEN</option>
                    <option value="{{$racas::PERSA}}">PERSA</option>
                    <option value="{{$racas::CALOPSITA}}">CALOPSITA</option>
            </select>
        </div>

            <div class="col-md-2">
                <label for="peso" class="form-label">Peso</label>
                <input type="text" id="peso" name="peso" value="{{
                    $pet ? $pet->peso :old('peso') }}"required>
            </div>

        <div class="col-md-2">
            <input class="btn btn-primary mt-4" type="submit"
                value="{{ $raca ? 'Atualizar' : 'Cadastrar' }}">
        </div>
    </form>

    <style>
       .titulo{
        height: 100px;
        display:flex;
        align-items: center;
        margin: center
       }
    label{
        font-size: 20px;
    }
    </style>
@endsection
@section('scripts')
    @parent
@endsection
