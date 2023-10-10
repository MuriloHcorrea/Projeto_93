@extends('layouts.base')
@section('content')

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
    <h1 class="titulo">
        <i class="bi bi-list-check"></i>
        Pet: {!! $pet->id_pet !!}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th class="col-md-2">ID</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Sexo</th>
                    <th>Data_criação</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr @if ($pet->id_pet == 2) class="table-danger" @endif>
                    <td scope="row">{{ $pet->id_pet }}</td>
                    <td>{{$pet->nome}}</td>
                    <td>{{$pet->dt_nascimento}}</td>
                    <td>{{$pet->sexo->sexo}}</td>
                    <td>{{$pet->created_at}}</td>
                </tr>


            </tbody>
        </table>
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
        <a class="btn btn-dark" href="{{ route('pet.edit', ['id' => $pet->id_pet]) }}">
            <i class="bi bi-pencil-square"> Editar pet</i>
        </a>
    @endsection
    @section('scripts')
        @parent
    @endsection
