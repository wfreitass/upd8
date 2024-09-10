<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;

class StoreAnimalRequest extends FormRequest
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
            'name' => 'required|max:255',
            'age' => 'required|max:255',
            'type_animal_id' => 'required|max:255',
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

    /**
     *
     * @return array
     * 
     */
    public function messages(): array
    {
        return [
            'name.required' => 'nome é um campo obrigatório',
            'name.max' => 'nome tem o tamanho máximo de 255',

            'age.required' => 'idade é um campo obrigatório',
            'age.max' => 'idade tem o tamanho máximo de 255',

            'type_animal_id.required' => 'tipo animal é um campo obrigatório',
            'type_animal_id.max' => 'tipo animal tem o tamanho máximo de 255',

        ];
    }
}
