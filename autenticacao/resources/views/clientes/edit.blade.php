@extends('layouts.app')

@section('title','Editar cliente')

@section('content')

<div class="mb-4">
    <a href="{{route('clientes.index')}}" class="btn btn-xl btn-outline-secondary">
        <i data-feather="arrow-left-circle"></i>
        Voltar
    </a>
</div>

<div class="card">
  <h5 class="card-header">Detalhes do Cliente</h5>
  <div class="card-body">
    <form action="/clientes/{{ $cliente->id }}" method="POST">
      @method('put')
      @csrf
      <p>
        <span class="text-secondary h5"><strong>Nome: </strong></span>
          <input type="text" name="nome" value="{{ $cliente->nome }}">
      </p>
      <p><span class="text-secondary h5"><strong>Sobrenome: </strong></span>
        <input type="text" name="sobrenome" value="{{ $cliente->sobrenome }}">
      </p>
      <p><span class="text-secondary h5"><strong>Email: </strong></span>
        <input type="text" name="email" value="{{ $cliente->email }}">
      </p>
      <p><span class="text-secondary h5"><strong>Endereco: </strong></span>
        <input type="text" name="endereco" value="{{ $cliente->endereco }}">
      </p>
      <p><span class="text-secondary h5"><strong>Bairro: </strong></span>
        <input type="text" name="bairro" value="{{ $cliente->bairro }}">
      </p>
      <p><span class="text-secondary h5"><strong>Idade: </strong></span>
        <input type="text" name="idade" value="{{ $cliente->idade }}">
      </p>
      <p><span class="text-secondary h5"><strong>UF: </strong></span>
        <input type="text" name="uf" value="{{ $cliente->uf }}">
      </p>
      <p><span class="text-secondary h5"><strong>CPF: </strong></span>
        <input type="text" name="cpf" value="{{ $cliente->cpf }}">
      </p>
      <input type="submit" value="Salvar">
    </form>
    
  </div>
</div>


@endsection
