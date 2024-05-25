<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidoRequest extends FormRequest
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
            'estadio' => ['required','integer','gte:1','exists:estadios,id'],
            'fecha' => ['required','date'],
            'equipo_local' => ['required','integer','gte:1','exists:equipos,id'],
            'equipo_visita' => ['required','integer','gte:1','exists:equipos,id','different:equipo_local'],            
        ];
    }

    public function messages(): array
    {
        return [
            'estadio.required' => 'Indique el estadio',
            'estadio.integer' => 'Estadio no válido',
            'estadio.gte' => 'Estadio no válido',
            'estadio.exists' => 'Estadio no válido',
            'fecha.required' => 'Indique fecha del partido',
            'fecha.date' => 'Fecha no válida',
            'equipo_local.required' => 'Indique el equipo local',
            'equipo_local.integer' => 'Equipo local no válido',
            'equipo_local.gte' => 'Equipo local no válido',
            'equipo_local.exists' => 'Equipo local no válido',
            'equipo_visita.required' => 'Indique el equipo visita',
            'equipo_visita.integer' => 'Equipo visita no válido',
            'equipo_visita.gte' => 'Equipo visita no válido',
            'equipo_visita.exists' => 'Equipo visita no válido',
            'equipo_visita.different' => 'El equipo visita debe ser distinto del local',
        ];
    }
}
