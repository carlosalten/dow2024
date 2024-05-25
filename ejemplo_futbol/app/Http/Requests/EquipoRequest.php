<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
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
            'nombre' => ['required','min:3','max:20'],
            'entrenador' => ['required','min:3','max:20'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'Indique el nombre del equipo',
            'nombre.min' => 'El nombre del equipo debe tener como mínimo 3 letras',
            'nombre.max' => 'El nombre del equipo debe tener como máximo 20 letras',
            'entrenador.required' => 'Indique el entrenador',
            'entrenador.min' => 'El nombre del entrenador debe tener como mínimo 3 letras',
            'entrenador.max' => 'El nombre del entrenador debe tener como máximo 20 letras',
        ];
    }
}
