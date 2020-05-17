<html>
<body>

    <h4> Prezado Cliente {{$cliente->nome}},</h4> 

    <p>{{ $texto }}</p>

    <p> Data / Hora: {{ $datahora }} </p>

    <div>
        <img  width="10%"  height="10%" src="{{ $message->embed(public_path() . '/img/ufmt.jpg') }}">
    </div>
    
</body>
</html>