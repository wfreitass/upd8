<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;

class UpdateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:255',
            'cpf' => 'required|max:255',
            'dt_nascimento' => 'required',
            'estado_id' => 'required',
            'cidade_id' => 'required',
            'sexo' => 'required',
        ];
    }

    /**
     *
     * @param Validator $validator
     * 
     * 
     */
    public function after(Validator $validator)
    {
        if ($validator->fails()) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422));
        }
        return function () {};
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'nome é um campo obrigatório',
            'nome.max' => 'nome tem o tamanho máximo de 255',

            'cpf.required' => 'idade é um campo obrigatório',
            'cpf.max' => 'idade tem o tamanho máximo de 255',

            'estado_id.required' => 'estado é um campo obrigatório',
            'cidade_id.required' => 'cidadel é um campo obrigatório',
            'sexo.required' => 'sexo é um campo obrigatório',
        ];
    }
}
