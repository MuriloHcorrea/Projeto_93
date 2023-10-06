@extends('layouts.base')

@section('content')

<h1>
    @if ($cliente)
        Editando cliente:
        {{ $cliente->nome }}
    @else
        Cadastrar cliente
    @endif
</h1>

<form action="{{ $cliente

?
route('cliente.update',['id' =>$cliente->id_cliente])
:
route('cliente.store')}}"




method="post" enctype="multipart/form-data" class="row g-3">
    @csrf
    <div class="col-md-2">
        <label for="nome" class="form-label">Nome*</label>
        <input type="text" id="nome" name="nome"  value="{{
            $cliente ? $cliente->nome :old('nome') }}"required>
    </div>

    <div class="col-md-2">
        <label for="email" class="form-label">E-mail*</label>
        <input type="email" id="email" name="email" value="{{
            $cliente ? $cliente->email :old('email') }}"required>
    </div>

    <div class="col-md-2">
        <label for="dt_nascimento" class="form-label">Data de nascimento*</label>
        <input type="date" id="dt_nascimento" name="dt_nascimento" value="{{
            $cliente ? $cliente->dt_nascimento :old('dt_nascimento') }}"required>
    </div>

    <div class="col-md-2">
        <label for="cpf" class="form-label">CPF*</label>
        <input type="text" id="cpf" name="cpf" value="{{
            $cliente ? $cliente->cpf :old('cpf') }}"required>
    </div>

    <div class="col-md-2">
        <label for="endereco" class="form-label">Endereço*</label>
        <input type="text" id="endereco" name="endereco" value="{{
            $cliente ? $cliente->endereco :old('endereco') }}"required>
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
