<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Mail\EmailCliente;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Mail;

class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //imporat ClienteRequest lá esta defido as regras e mensagens 
    public function store(ClienteRequest $request)
    {        
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->sobrenome = $request->sobrenome;
        $cliente->email = $request->email;
        $cliente->idade = $request->idade;
        $cliente->endereco = $request->endereco;
        $cliente->bairro = $request->bairro;
        $cliente->cidade = $request->cidade;
        $cliente->cep = $request->cep;
        $cliente->uf = $request->uf;
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->save(); 
        return redirect()->route('clientes.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.info',compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    //imporat ClienteRequest lá esta defido as regras e mensagens 
    public function update(ClienteRequest $request, Cliente $cliente)
    {
    
        $cliente->nome = $request->nome;
        $cliente->sobrenome = $request->sobrenome;
        $cliente->email = $request->email;
        $cliente->idade = $request->idade;
        $cliente->endereco = $request->endereco;
        $cliente->bairro = $request->bairro;
        $cliente->uf = $request->uf;
        $cliente->cpf = $request->cpf;
        $cliente->save();
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        if($cliente)
            $cliente->delete();
        return redirect()->route('clientes.index');
    }
    public function mail(Cliente $cliente)
    {
        return view('clientes.mail', compact(['cliente']));
    }

    public function sendmail(Request $request, Cliente $cliente)
    {
        Mail::to($cliente->email)
               // ->send(new EmailCliente($cliente, $request->texto));
               //infeleira email
               ->queue(new EmailCliente($cliente, $request->texto));
                return redirect()->route('clientes.index');
    }
}
