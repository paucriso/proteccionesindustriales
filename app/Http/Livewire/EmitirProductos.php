<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmitirProductos extends Component
{
    public $productId;

    public function render()
    {
        return view('livewire.emitir-productos');
    }
}
