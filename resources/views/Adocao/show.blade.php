@extends('layouts.base')
@section('content')

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
    <h1 class="titulo">
        <i class="bi bi-list-check"></i>
        Adoção: {!! $adocao->id_adocao !!}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th class="col-md-2">ID</th>
                    <th>Nome Dono</th>
                    <th>Nome Pet</th>
                    <th>Status</th>
                    <th>Criado em:</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr @if ($adocao->id_adocao == 2) class="table-danger" @endif>
                    <td scope="row">{{ $adocao->id_adocao }}</td>
                    <td>{{$adocao->cliente->nome}}</td>
                    <td>{{$adocao->pet->nome}}</td>
                    <td>{{$adocao->status_adocao}}</td>
                    <td>{{$adocao->created_at}}</td>
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

        <a class="btn btn-dark" href="{{ route('adocao.edit', ['id' => $adocao->id_adocao]) }}">
            <i class="bi bi-pencil-square"> Editar Adoção</i>
        </a>
    @endsection
    @section('scripts')
        @parent
    @endsection
