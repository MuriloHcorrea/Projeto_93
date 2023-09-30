@extends('layouts.base')
@section('content')
    <h1>
        <i class="bi bi-list-check"></i>
        Cliente: {!! $cliente->id_cliente !!}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                    <tr
                        @if ($cliente->id_cliente == 2)
                            class="table-danger"
                        @endif
                    >
                        <td scope="row">{{ $cliente->id_cliente }}</td>
                        <td>{!! $cliente->nome !!}</td>
                        <td>{!! $cliente->dt_nascimento !!}</td>
                        <td>{!! $cliente->cpf !!}</td>
                        <td>{!! $cliente->email !!}</td>
                        <td>{!! $cliente->endereco !!}</td>
                    </tr>

            </tbody>
        </table>

        {{-- editar --}}
        <a class="btn btn-dark"
        href="{{ route('cliente.edit', ['id' => $cliente->id_cliente]) }}">
        <i class="bi bi-pencil-square"> Editar cliente</i>
  </a>
    @endsection
    @section('scripts')
        @parent
    @endsection
