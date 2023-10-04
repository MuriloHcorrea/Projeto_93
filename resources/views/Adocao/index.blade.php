@extends('layouts.base')

@section('content')

    <h1>

        <i class="bi bi-wallet2"></i>

        - Adoções
        |
        <a class="btn btn-primary"
           href="{{ route('adocao.create') }}">
            Registrar nova adoção
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
                    <th>CLIENTE</th>
                    <th>PET</th>
                    <th>STATUS</th>
                    <th>DATA CADASTRO DE ADOÇÃO</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($adocoes->get() as $adocao )
                <tr>
                    <td scope="row" class="col-2">
                        <div class="flex-column">

                            {{-- ver --}}
                            <a class="btn btn-success"
                                href="{{ route('adocao.show',['id'=>$adocao->id_adocao])}}">
                                <i class="bi bi-eye"></i>
                            </a>

                            {{-- editar --}}
                            <a class="btn btn-dark"
                                    href="{{ route('adocao.edit', ['id' => $adocao->id_adocao]) }}">
                                    <i class="bi bi-pencil-square"></i>
                              </a>
                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir" data-identificacao="{{ $adocao->id_adocao }}"
                                data-url="{{ route('adocao.destroy',['id' => $adocao->id_adocao]) }}">
                                <i class="bi bi-trash"></i>

                            </button>
                        </div>
                    </td>
                    <td>{{ $adocao->cliente->nome }}</td>
                    <td>{{ $adocao->pet->nome }}</td>
                    <td>{{ $adocao->status_adocao }}</td>
                    <td>{{ $adocao->created_at->format('d/m/Y \a\s H:i') }}h</td>

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
