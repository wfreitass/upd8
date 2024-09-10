<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;

class StoreConsultationRequest extends FormRequest
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
            'animal_id' => 'required|max:255',
            'symptoms' => 'required|max:255',
            'dt_consultation' => 'required',
            'turno' => 'required|max:255',
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
            'animal_id.required' => 'animal é um campo obrigatório',
            'animal_id.max' => 'animal tem o tamanho máximo de 255',

            'symptoms.required' => 'sintomas é um campo obrigatório',
            'symptoms.max' => 'sintomas tem o tamanho máximo de 255',

            'dt_consultation.required' => 'data da consulta é um campo obrigatório',

            'turno.required' => 'periodo é um campo obrigatório',
            'turno.max' => 'periodo tem o tamanho máximo de 255',
        ];
    }
}
