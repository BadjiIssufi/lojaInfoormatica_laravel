@extends('layouts.app')

@section('title','Email')

@section('content')



<div class="mb-4">
    <a href="{{route('clientes.index')}}" class="btn btn-xl btn-outline-secondary">
        <i data-feather="arrow-left-circle"></i>
        Voltar
    </a>
</div>



<div class="card">
  <h5 class="card-header">Enviar email para Cliente</h5>
  <div class="card-body">

    <p><span class="text-secondary h5"><strong>Para: </strong></span>{{$cliente->nome}}</p>
    <p><span class="text-secondary h5"><strong>Email: </strong></span>{{$cliente->email}}</p>


    <form action="{{ route('clientes.sendmail',$cliente->id) }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="texto">Corpo do email:</label>
        <textarea class="form-control" id="texto" rows="5" name="texto"></textarea>
      </div>
      <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
    </form>

  </div>
</div>


@endsection

