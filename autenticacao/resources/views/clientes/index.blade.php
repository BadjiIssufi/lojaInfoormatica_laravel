@extends('layouts.app')

@section('title','Clientes cadastrados')

@section('content')
<div class="mb-4">
    <a href="{{route('clientes.create')}}" class="btn btn-xl btn-outline-primary">
        <i data-feather="user-plus"></i>
        Novo Cliente
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>UF</th>
                <th>CPF</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Email</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $c)                                
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->nome}}</td>
                <td>{{$c->sobrenome}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->uf}}</td>
                <td>{{$c->cpf}}</td>
                <form action="{{route('clientes.destroy', $c->id)}}" method="POST">
                    <td>
                        <a href="{{route('clientes.show', $c->id)}}" class="btn btn-sm">
                            <i class="text-info feather-16"  data-feather="eye" ></i>
                        </a>  
                    </td>
                    <td>
                        <a href="{{route('clientes.edit', $c->id)}}" class="btn btn-sm">
                            <i class="text-primary  feather-16"  data-feather="edit" ></i>
                        </a>
                    </td> 
                    <td>
                        <a href="{{route('clientes.mail', $c->id)}}" class="btn btn-sm">
                            <i class="text-info feather-16"  data-feather="mail" ></i>
                        </a>
                    </td> 
                    <td>
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-link">
                        <i class="text-danger feather-16" data-feather="trash-2"></i>
                    </button>
                    </td>                
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection