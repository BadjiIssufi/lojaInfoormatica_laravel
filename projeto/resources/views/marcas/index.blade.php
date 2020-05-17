@extends('layouts.dashboard')

@section('principal')


<h1>Marcas</h1>

<a href="/marcas/create">
Nova Marca
</a>

<hr>

<ul>
  @foreach($marcas as $m)
  <li>
    {{ $m->nome }} 
    <a href="/marcas/{{ $m->id }}/edit">[Edit]</a>

    <form action="/marcas/{{$m->id}}" method="POST">
      @method('delete')
      @csrf
      <input type="submit" value="Remover">
    </form>
  </li>
  @endforeach
</ul>

@endsection