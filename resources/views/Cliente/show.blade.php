@extends('layouts.base')
@section('content')

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
    <h1 class="titulo">
        <i class="bi bi-list-check"></i>
        Cliente: {!! $cliente->id_cliente !!}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th class="col-md-2">ID</th>
                    <th>Nome Dono</th>
                    <th>Data de nascimento</th>
                    <th>CPF</th>
                    <th>EMAIL</th>
                    <th>Endereço</th>
                    <th>Cadastrado em:</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr @if ($cliente->id_cliente == 2) class="table-danger" @endif>
                    <td scope="row">{{ $cliente->id_cliente }}</td>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->dt_nascimento}}</td>
                    <td>{{$cliente->cpf}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->endereco}}</td>
                    <td>{{$cliente->created_at}}</td>
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
        <a class="btn btn-dark" href="{{ route('cliente.edit', ['id' => $cliente->id_cliente]) }}">
            <i class="bi bi-pencil-square"> Editar Cliente</i>
        </a>

    @endsection
    @section('scripts')
        @parent
    @endsection
