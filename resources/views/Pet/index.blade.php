@extends('layouts.base')

@section('content')

    <h1>

        <i class="bi bi-wallet2"></i>

        - Pet
        |
        <a class="btn btn-primary"
           href="{{ route('pet.create') }}">
            Novo pet
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
                    <th>Peso</th>
                    <th>Cor</th>
                    <th>Endereço</th>
                    <th>Criado em:</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($pets as $pet )
                <tr>
                    <td scope="row" class="col-2">
                        <div class="flex-column">

                          {{-- ver --}}
                          <a class="btn btn-success"
                          href="{{ route('pet.show',
                                        ['id'=>$pet->id_pet]
                                        ) }}">
                          <i class="bi bi-eye"></i>
                      </a>
                          {{-- editar --}}
                          <a class="btn btn-dark"
                                  href="{{ route('pet.edit', ['id' => $pet->id_pet]) }}">
                                  <i class="bi bi-pencil-square"></i>
                            </a>

                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir" data-identificacao="{{ $pet->id_pet }}"
                                data-url="{{ route('pet.destroy',['id' => $pet->id_pet]) }}">
                                <i class="bi bi-trash"></i>

                            </button>
                        </div>
                    </td>
                    <td>{{ $pet->nome }}</td>
                    <td>{{ $pet->dt_nascimento }}</td>
               {{-- <td>{{ $pet->raca }}</td> --}}
               {{-- <td>{{ $pet->cor }}</td>--}}
               {{-- <td>{{ $pet->porte }}</td> --}}
                    <td>{{ $pet->peso }}</td>
                    <td>{{ $pet->castrado }}</td>
                    <td>{{ $pet->deficiencia }}</td>
                    <td>{{ $pet->vacina }}</td>
                    <td>{{ $pet->created_at->format('d/m/Y \a\s H:i') }}h</td>

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
