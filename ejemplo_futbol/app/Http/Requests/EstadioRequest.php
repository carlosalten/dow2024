<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadioRequest extends FormRequest
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
            'nombre' => ['required'],
            'imagen' => ['required','image','mimes:png,jpg,jpeg','max:2048','dimensions:ratio=4/3'],
        ];
    }

    public function messages():array
    {
        return [
            'nombre.required' => 'Indique el nombre del estadio',
            'imagen.required' => 'Indique la imagen del estadio',
        ];
    }
}
