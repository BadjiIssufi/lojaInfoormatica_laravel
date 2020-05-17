@extends('layouts.app')

@section('title','Novo Cliente')

@section('content')

<div class="mb-4">
    <a href="{{route('clientes.index')}}" class="btn btn-xl btn-outline-secondary">
        <i data-feather="arrow-left-circle"></i>
        Voltar
    </a>
</div>

<form method="POST" action="{{route('clientes.store')}}">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="nome">Primeiro nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="" name="nome" value="{{old('nome')}}">
            @error('nome') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control @error('sobrenome') is-invalid @enderror" id="sobrenome" placeholder="" name="sobrenome" value="{{old('sobrenome')}}">
            @error('sobrenome') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="you@example.com" name="email" value="{{old('email')}}">
            @error('email') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mb-3">
            <label for="cep">CEP</label>
            <input type="text" class="form-control @error('cep') is-invalid @enderror" id="cep" name="cep" placeholder="CEP: 00.000-00" value="{{old('cep')}}">
            @error('cep') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>

        <div class="col-md-8  mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" placeholder="Av. Brasil 1500" value="{{old('endereco')}}">
            @error('endereco') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control @error('bairro') is-invalid @enderror" id="bairro" name="bairro" placeholder="Bairro" value="{{old('bairro')}}">
        @error('bairro') <div class="invalid-feedback">{{$message}} </div> @enderror
    </div>
    <div class="row">
        <div class="col-md-7 mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control @error('cidade') is-invalid @enderror" id="cidade" name="cidade" placeholder="Cidade" value="{{old('cidade')}}">
            @error('cidade') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>

        <div class="col-md-5 mb-3">
            <label for="uf">UF</label>
            <select class="custom-select d-block w-100 @error('uf') is-invalid @enderror" name="uf" id="uf">
                <option value="">Escolha...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AM">Amazonas</option>
                <option value="AP">Amapá</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
            @error('uf') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="idade">Idade</label>
            <input type="number" class="form-control @error('idade') is-invalid @enderror" id="idade" name="idade" placeholder="" value="{{old('idade')}}">
            @error('idade') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>

        <div class="col-md-4 mb-3">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" placeholder="CPF" value="{{old('cpf')}}">
            @error('cpf') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>


        <div class="col-md-4 mb-3">
            <label for="cpf">RG</label>
            <input type="text" class="form-control @error('rg') is-invalid @enderror" id="rg" name="rg" placeholder="RG" value="{{old('rg')}}">
            @error('rg') <div class="invalid-feedback">{{$message}} </div> @enderror
        </div>
    </div>
    <hr class="mb-4">
    <div class="row">
        <div class="col-md-3 mb-3 offset-md-9">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
        </div>
    </div>

</form>

@endsection


