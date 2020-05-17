@extends('layouts.dashboard')

@section('principal')


<h1>Departamentos</h1>

<a href="/departamentos/create">
Novo Departamento
</a>

<hr>

<ul>
  @foreach($departamentos as $c)
  <li>
    {{ $c->nome }} 
    <a href="/departamentos/{{ $c->id }}/edit">[Edit]</a>

    <form action="/departamentos/{{$c->id}}" method="POST">
      @method('delete')
      @csrf
      <input type="submit" value="Remover">
    </form>
  </li>
  @endforeach
</ul>

@endsection