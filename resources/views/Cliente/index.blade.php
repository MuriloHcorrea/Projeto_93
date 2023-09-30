@extends('layouts.base')

@section('content')

    <h1>

        <i class="bi bi-wallet2"></i>

        - CLIENTES
        |
        <a class="btn btn-primary"
           href="{{ route('cliente.create') }}">
            Novo cliente
        </a>
    </h1>

    {{-- alerts --}}
    @include('layouts.partials.alerts')
    {{-- /alerts --}}


    {{-- paginação --}}
        {{-- {!! $cliente->links() !!} --}}
    {{-- /paginação --}}


    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <caption>LISTA DE</caption>
                <tr>
                    <th>CRUD</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                    <th>Criado em:</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($cliente as $cliente )
                <tr>
                    <td scope="row" class="col-2">
                        <div class="flex-column">

                            {{-- ver --}}
                            <a class="btn btn-success"
                                href="{{ route('cliente.show',['id'=>$cliente->id_cliente])}}">
                                <i class="bi bi-eye"></i>
                            </a>

                            {{-- editar --}}
                            <a class="btn btn-dark"
                                    href="{{ route('cliente.edit', ['id' => $cliente->id_cliente]) }}">
                                    <i class="bi bi-pencil-square"></i>
                              </a>
                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir" data-identificacao="{{ $cliente->id_cliente }}"
                                data-url="{{ route('cliente.destroy',['id' => $cliente->id_cliente]) }}">
                                <i class="bi bi-trash"></i>

                            </button>
                        </div>
                    </td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->dt_nascimento }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>{{ $cliente->created_at->format('d/m/Y \a\s H:i') }}h</td>

                </tr>

                @empty
                 <tr>
                    <td colspan="8">
                        Nenhum registro retornado
                    </td>
                 </tr>
                @endforelse
            </tbody>
        </table>
    </div>

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
@endsection
@section('scripts')
@parent
@endsection
