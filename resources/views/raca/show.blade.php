@extends('layouts.base')
@section('content')

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
    <h1>
        <i class="bi bi-list-check"></i>
        Raça: {!! $raca->id_raca !!}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th class="col-md-2">ID</th>
                    {{-- <th>Nome</th> --}}
                    <th>Tipo</th>
                    <th>Criado em:</th>
                    <th>Data de nascimento</th>




                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr @if ($raca->id_raca == 2) class="table-danger" @endif>
                    <td scope="row">{{ $raca->id_raca }}</td>
                    {{-- <td>{{$raca->nome}}</td> --}}
                    <td>{{ $raca->tipo->tipo }}</td>
                    <td>{{$raca->created_at}}</td>
                    <td>{{$raca->created_at}}</td>
                </tr>


            </tbody>

        </table>

        <a class="btn btn-dark" href="{{ route('raca.edit', ['id' => $raca->id_raca]) }}">
            <i class="bi bi-pencil-square"> Editar raça</i>
        </a>
    @endsection
    @section('scripts')
        @parent
    @endsection
