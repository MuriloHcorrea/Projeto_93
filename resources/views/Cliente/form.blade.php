@extends('layouts.base')

@section('content')

<h1 class="mx-3 my-4">
    <i class="bi bi-person"></i>
    Novo Cliente
</h1>

<form action="{{route('cliente.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
    @csrf
    <div class="col-md-2">
        <label for="id_cliente" class="form-label">Nome*</label>
        <input type="text">
    </div>

    <div class="col-md-2">
        <label for="id_cliente" class="form-label">E-mail*</label>
        <input type="email">
    </div>

    <div class="col-md-2">
        <label for="id_cliente" class="form-label">Data de nascimento*</label>
        <input type="date">
    </div>

    <div class="col-md-2">
        <label for="id_cliente" class="form-label">CPF*</label>
        <input type="text">
    </div>

    <div class="col-md-2">
        <label for="id_cliente" class="form-label">Endereço*</label>
        <input type="text">
    </div>


</form>

<div class="col-md-2">
    <input class="btn btn-primary mt-4" type="submit"
value="{{$cliente ?
    'Atualizar' :
    'Cadastrar'
    }}">
</div>

@endsection

@section('scripts')

@parent

@endsection
