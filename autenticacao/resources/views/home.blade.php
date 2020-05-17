@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="table-info justify-content-center" >Olá, {{ Auth::user()->name}} seja bem vindo.</h1>
            </div>
        </div>
    </div>
</div>
@endsection
