@extends('layouts.base')
@section('content')

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
    <h1>
        <i class="bi bi-list-check"></i>
        Cliente: {!! $cliente->id_cliente !!}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th class="col-md-2">ID</th>
                    <th>Nome Dono</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr @if ($cliente->id_cliente == 2) class="table-danger" @endif>
                    <td scope="row">{{ $cliente->id_cliente }}</td>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->created_at}}</td>
                </tr>


            </tbody>
        </table>

        <a class="btn btn-dark" href="{{ route('adocao.edit', ['id' => $cliente->id_cliente]) }}">
            <i class="bi bi-pencil-square"> Editar Cliente</i>
        </a>
    @endsection
    @section('scripts')
        @parent
    @endsection
