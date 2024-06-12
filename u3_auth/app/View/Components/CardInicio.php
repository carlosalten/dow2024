<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardInicio extends Component
{
    
    /**
     * Create a new component instance.
     */
    public function __construct(public string $titulo,public string $descripcion,public string $url, public string $textoBoton)
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-inicio');
    }
}
