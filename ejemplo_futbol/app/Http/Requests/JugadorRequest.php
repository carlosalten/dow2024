<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRequest extends FormRequest
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
            'nombre' => ['required','alpha'],
            'apellido' => ['required','alpha'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'Indique el nombre del jugador',
            'nombre.alpha' => 'El nombre solo debe llevar letras',
            'apellido.required' => 'Indique el apellido del jugador',
            'apellido.alpha' => 'El apellido solo debe llevar letras',
        ];
    }
}
