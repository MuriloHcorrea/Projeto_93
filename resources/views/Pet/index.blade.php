@extends('layouts.base')

@section('content')

    <h1 class="titulo">

        <i class="fa-solid fa-paw"></i>

        - Pet
        |
        <a class="btn btn-primary"
           href="{{ route('pet.create') }}">
            Novo pet
        </a>

        <a class="btn btn-primary"
           href="{{ route('raca.create') }}">
            Cadastrar nova raça
        </a>

    </h1>

    {{-- alerts --}}
    @include('layouts.partials.alerts')
    {{-- /alerts --}}
    <div class="row">
    <form  action="{{ route('pet.index')}}" method="get" class="row mb-2">

        <label>Nome</label>
        <input class="form-control col-md-4 mb-4" type="search" name="search" id="search"
        placeholder="Digite o nome do pet..." value="{{ old('search',request()->get('search'))}}">

        <label for="id_sexo" class="form-label">Sexo</label>
                <select name="id_sexo" id="id_sexo" class="form-select mb-4">
                    <option value="">Selecione...</option>
                    @foreach ($sexos::all() as $sexo)
                        <option value="{{$sexo ->id_sexo}}">
                            {{$sexo->sexo}}
                        </option>
                    @endforeach
                </select>

        <button type="submit" class="btn btn-primary ms-2 col-md-2 mb-2">Pesquisar</button>

        <button value="{{route('pet.index')}}" class="btn btn-secondary ms-2 col-md-2 mb-2">Limpar</button>
    </form>
    </div>

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th>CRUD</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Sexo</th>
                    <th>Entrada na ONG em:</th>
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
                    <td>{{ $pet->sexo->sexo }}</td>
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
{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
@endsection
@section('scripts')
@parent
@endsection

