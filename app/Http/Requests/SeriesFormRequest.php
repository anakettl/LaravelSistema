<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
    public function rules()
    {
        return [      
            'nome'=>'required|min:2'
            //metodo validate recebe um array, como chave o nome do campo e no valor as regras de validacao separadas por |
        ];
    }

    public function messages()
    { //metodo messages retorna um array contendo todas as mensagens. a chave e a regra e o valor a mensagem
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome deve ter no mínimo 2 caracteres'
        ];
    }
}
