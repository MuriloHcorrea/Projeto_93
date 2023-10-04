@extends('layouts.base')
@section('content')
    <h1>
        @if ($pet)
            Editando Pet:

            {{ $pet->nome }}
        @else
           <div class="titulo">
            <h1> Cadastrar pet  </h1>
           </div>
        @endif

    </h1>



    <form action="{{ $pet ? route('pet.update', ['id' => $pet->id_pet]) : route('pet.store') }}" method="post"
        enctype="multipart/form-data" class="row g-3">
        @csrf

        <div class="row">

            <div class="col-md-4">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control"
                    value="{{ $pet ? $pet->nome : old('nome') }}"required>
            </div>

            <div class="col-md-2">
                <label for="dt_nascimento" class="form-label">Data de nascimento</label>
                <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control"
                    value="{{ $pet ? $pet->dt_nascimento : old('dt_nascimento') }}"required>
            </div>
            <div class="col-md-2">
                <label for="id_sexo"  class="form-label">Sexo</label>
                <select name="id_sexo" id="id_sexo" class="form-select">
                    <option value="Macho">Macho</option>
                    <option value="Femea">Femea</option>
                </select>
        </div>

        <div class="col-md-2">
            <label for="id_raca"  class="form-label">Raça</label>
            <select name="id_raca" id="id_raca" class="form-select">
                <option value="1">goldem</option>
            </select>
        </div>

            <div class="col-md-2">
                <label for="id_porte"  class="form-label">Porte</label>
                <select name="id_porte" id="id_porte" class="form-select">
                    <option value="1">Pequeno</option>
                    <option value="2">Medio</option>
                    <option value="3">Grande</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="id_cor"  class="form-label">Cor</label>
                <select name="id_cor" id="id_cor" class="form-select">
                    <option value="Branco">Branco</option>
                    <option value="Preto">Preto</option>
                    <option value="Marrom">Marrom</option>
                    <option value="Mistos">Mistos</option>
                </select>
            </div>

        <div class="col-md-2">

            <input class="btn btn-primary mt-4" type="submit"
                value="{{ $pet ? 'Atualizar' : 'Cadastrar' }}">

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
