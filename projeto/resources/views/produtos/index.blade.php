@extends('layouts.dashboard')

@section('principal')

<a href="{{ route('produtos.create') }}">
  Novo Produto
</a>
 <hr>
<ul>
  @foreach ($produtos as $p)
    <li> {{ $p->id }} - {{ $p->nome }} - {{ $p->marca->nome}}
         <a href="{{route('produtos.edit', $p->id )}}">[EDIT]</a>
         <form action="{{route('produtos.destroy', $p->id)}}" 
               method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Apagar">
         </form>
    </li>    
  @endforeach
</ul>

@endsection