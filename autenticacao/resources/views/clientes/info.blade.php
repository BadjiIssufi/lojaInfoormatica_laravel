@extends('layouts.app')

@section('title','Ver cliente')

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

    <p><span class="text-secondary h5"><strong>Nome: </strong></span>{{$cliente->nome}}</p>
    <p><span class="text-secondary h5"><strong>Sobrenome: </strong></span>{{$cliente->sobrenome}}</p>
    <p><span class="text-secondary h5"><strong>Email: </strong></span>{{$cliente->email}}</p>
    <p><span class="text-secondary h5"><strong>Endereco: </strong></span>{{$cliente->endereco}}</p>
    <p><span class="text-secondary h5"><strong>Bairro: </strong></span>{{$cliente->bairro}}</p>
    <p><span class="text-secondary h5"><strong>Idade: </strong></span>{{$cliente->idade}}</p>
    <p><span class="text-secondary h5"><strong>UF: </strong></span>{{$cliente->uf}}</p>
    <p><span class="text-secondary h5"><strong>CPF: </strong></span>{{$cliente->cpf}}</p>


  </div>
</div>


@endsection
