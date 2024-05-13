<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Jugador;

class NumeroCamisetaRepetidoRule implements ValidationRule
{
    private $equipoId;

    public function __construct($equipoId){
        $this->equipoId = $equipoId;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $numeroCamiseta = $value;
        // dd($numeroCamiseta);//dump and die
        // dd($this->equipoId);

        $result = Jugador::where('numero_camiseta',$numeroCamiseta)->where('equipo_id',$this->equipoId)->get();
        if(!$result->isEmpty()){
            $jugador = $result->first();
            $fail('La camiseta número '.$numeroCamiseta.' ya está asignada en '.$jugador->equipo->nombre);
            // $fail('Número de camiseta ya está asignado en el equipo');
        }
    }
}
