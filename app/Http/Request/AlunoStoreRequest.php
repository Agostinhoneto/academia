<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class AlunoStoreRequest extends FormRequest
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
            'nome' => 'required',
            'endereco' => 'required',
            //'ano_criacao' => 'required',
            //'valor' => 'required',
        ];
    }

    public function messages()
{
    return [
        'nome.required' => 'Nome é requerido',
        //'body.required' => 'A message is required',
    ];
}


}