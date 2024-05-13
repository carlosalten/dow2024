<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\NumeroCamisetaRepetidoRule;

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
            'nombre' => ['required','alpha','min:2','max:20'],
            'apellido' => ['required','alpha','min:2','max:20'],
            'rut' => ['required','min:9','max:10','unique:jugadores,rut'],
            'numero_camiseta' => ['required','integer','gte:1','lte:99',new NumeroCamisetaRepetidoRule(request('equipo'))],
            'posicion' => ['required',Rule::in(['Arquero','Defensa','Volante','Delantero'])],
            'equipo' => ['required','integer','gte:1','exists:equipos,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'Indique el nombre del jugador',
            'nombre.alpha' => 'El nombre solo debe llevar letras',
            'nombre.min' => 'El nombre debe tener 2 letras mínimo',
            'nombre.max' => 'El nombre debe tener 20 letras máximo',
            'apellido.required' => 'Indique el apellido del jugador',
            'apellido.alpha' => 'El apellido solo debe llevar letras',
            'apellido.min' => 'El apellido debe tener 2 letras mínimo',
            'apellido.max' => 'El apellido debe tener 20 letras máximo',
            'rut.required' => 'Ingrese el RUT',
            'rut.unique' => 'El RUT :input ya está asignado a otro jugador',
            'numero_camiseta.required' => 'Ingrese el número de camiseta',
            'numero_camiseta.integer' => 'El número de camiseta debe ser un número entero',
            'numero_camiseta.gte' => 'El número de camiseta debe ser un número entre 1 y 99',
            'numero_camiseta.lte' => 'El número de camiseta debe ser un número entre 1 y 99',
            'posicion.required' => 'Indique la posición del jugador',
            'posicion.in' => 'Indique una posición válida',
            'equipo.required' => 'Indique el equipo del jugador',
            'equipo.integer' => 'Indique un equipo válido',
            'equipo.gte' => 'Indique un equipo válido',
            'equipo.exists' => 'El equipo no existe en el sistema',
        ];
    }
}
