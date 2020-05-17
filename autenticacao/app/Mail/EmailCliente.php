<?php

namespace App\Mail;

use App\Cliente;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailCliente extends Mailable
{
    use Queueable, SerializesModels;
    private $cliente;
    private $texto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente, $texto)
    {
        $this->cliente = $cliente;
        $this->texto = $texto;
      

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $datahora = now()->format('d-m-y H:i:s');
        return  $this
        -> subject('Email para meu cliente')
       ->view('mail.emailcliente',[
            'cliente' => $this->cliente,
            'texto' => $this ->texto,
            'datahora' => $datahora
       ]);
            
    }
}
