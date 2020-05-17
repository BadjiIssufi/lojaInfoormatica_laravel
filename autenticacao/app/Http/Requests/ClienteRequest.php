<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // aqui no rules define regras obrigatorios 
    public function rules()
    {
        return [
            'nome' => 'sometimes|required|min:2|max:20',
            'sobrenome' => 'sometimes|required|min:2',
            'email' => 'sometimes|required',
            'idade' => 'sometimes|required|lt:200',
            'endereco' => 'sometimes|required',
            'bairro' => 'sometimes|required',
            'cidade' => 'sometimes|required',
            'cep' => 'sometimes|required',
            'uf' => 'sometimes|required',
            'cpf' => 'sometimes|required'
        ];
    }
    ///aqui define  mensagens  
    public function messages() {   
        return [     
            'nome.required' => 'Digite um nome válido.',
            'nome.min' => 'O nome precisa ter no mínimo 2 letras.',
            'nome.max' => 'O nome tem um tamanho máximo de 20 letras.',
            'sobrenome.required' => 'O sobrenome é requerido.',
            'sobrenome.min' => 'É necessário no mínimo 2 caracteres no nome.',
            'idade.required' => 'A idade é requerida.',
            'idade.lt' => 'A idade máxima é de 200 anos.',
            'email.required' => 'Digite um endereço de email.',
            'email.email' => 'Digite um endereço de email válido',
            'email.unique' => 'Email já cadastrado',
            'endereco.required' => 'Digite um endereço válido',
            'uf.required' => 'Selecione um estado',
            'cpf.required' => 'Digite o CPF'  
        ]; 
}
}
