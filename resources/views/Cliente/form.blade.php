@extends('layouts.base')

@section('content')

<h1 class="mx-3 my-4">
    <i class="bi bi-person"></i>
    Novo Cliente
</h1>

<form action="{{route('cliente.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
    @csrf
    <div class="col-md-2">
        <label for="nome" class="form-label">Nome*</label>
        <input type="text" id="nome" name="nome" required>
    </div>

    <div class="col-md-2">
        <label for="email" class="form-label">E-mail*</label>
        <input type="email" id="email" name="email">
    </div>

    <div class="col-md-2">
        <label for="dt_nascimento" class="form-label">Data de nascimento*</label>
        <input type="date" id="dt_nascimento" name="dt_nascimento">
    </div>

    <div class="col-md-2">
        <label for="cpf" class="form-label">CPF*</label>
        <input type="text" id="cpf" name="cpf">
    </div>

    <div class="col-md-2">
        <label for="endereco" class="form-label">Endereço*</label>
        <input type="text" id="endereco" name="endereco">
    </div>
    <div class="col-md-2">
        <input class="btn btn-primary mt-4" type="submit"
        value="{{$cliente ?
        'Atualizar' :
        'Cadastrar'
        }}">
    </div>

</form>



@endsection

@section('scripts')

@parent

@endsection
