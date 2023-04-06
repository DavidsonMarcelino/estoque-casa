<?php

namespace App\Http\Requests;

use LaravelAux\BaseRequest;

class EstoqueRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'quantidade' => 'required',
            'quantidade_minima' => 'required',
        ];
    }

    /**
     * Validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute é obrigatório',
        ];
    }

    /**
     * Attributes Name
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'quantidade' => 'Quantidade',
            'quantidade_minima' => 'Quantidade mínima',
        ];
    }
}