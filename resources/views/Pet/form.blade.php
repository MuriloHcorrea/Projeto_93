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

            <input type="hidden" name="id_porte" value="1">
            <input type="hidden" name="id_raca" value="1">
            <input type="hidden" name="id_cor" value="1">
            <input type="hidden" name="id_sexo" value="1">
            <input type="hidden" name="id_historico" value="1">
            <input type="hidden" name="id_user" value="1">


            <input type="hidden" name="status_adocao" value="Adotado">

            <div class="col-md-4">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control"
                    value="{{ $pet ? $pet->nome : old('nome') }}"required>
            </div>

            <div class="col-md-2">
                <label for="dt_nascimento" class="form-label">Data de nascimento*</label>
                <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" value="{{
                    $pet ? $pet->dt_nascimento : old('dt_nascimento') }}"required>
            </div>




            <div class="col-md-2">
                <label for="id_sexo"  class="form-label">Sexo</label>
                <select name="id_sexo" id="id_sexo" class="form-select">
                    @foreach ($sexos::all() as $sexos)
                        <option value="{{$sexos ->id_sexo}}"
                            @selected(
                                (
                                    $pet &&
                                    $pet->id_sexo == $sexos->id_sexo
                                )
                                ||
                                old('id_sexo') == $sexos->id_sexo
                            )
                        >

                            {{$sexos->sexo}}
                        </option>
                    @endforeach
                </select>
            </div>

              {{-- <div class="col-md-2">
                <label for="id_sexo"  class="form-label">Sexo</label>
                <select name="id_sexo" id="id_sexo" class="form-select">

                     @foreach ($sexos as $sexo )
                        <option value="{{$sexo->id_sexo}}"
                            @selected(
                                (
                                    $pet &&
                                    $pet->id_sexo == $sexo->id_sexo
                                )
                                ||
                                old('id_sexo') == $sexo->id_sexo
                            )
                        >
                            {{ $sexo->sexo}}
                        </option>

                    @endforeach

                </select>
            </div> --}}

                    {{-- <option value="{{$sexos::MACHO}}">Macho</option>
                    <option value="{{$sexos::FEMEA}}">Femea</option> --}}


        <div class="col-md-2">
            <label for="id_raca"  class="form-label">Raça</label>
            <select name="id_raca" id="id_raca" class="form-select">
                @foreach ($racas::all() as $item)
                    <option value="{{$item->id_raca}}">
                        {{$item->raca}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label for="id_porte"  class="form-label">Porte</label>
            <select name="id_porte" id="id_porte" class="form-select">
                @foreach ($portes::all() as $portes)
                    <option value="{{$portes ->id_porte}}"
                        @selected(
                            (
                                $pet &&
                                $pet->id_porte == $portes->id_porte
                            )
                            ||
                            old('id_porte') == $portes->id_porte
                        )
                    >

                        {{$portes->descricao}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label for="id_cor"  class="form-label">Cor</label>
            <select name="id_cor" id="id_cor" class="form-select">
                @foreach ($cores::all() as $item)
                    <option value="{{$item->id_cor}}">
                        {{$item->cor}}
                    </option>
                @endforeach
            </select>
        </div>

            <div class="col-md-2">
                <label for="peso" class="form-label">Peso*</label>
                <input type="text" id="peso" name="peso" class="form-control" value="{{
                    $pet ? $pet->peso :old('peso') }}"required>
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
