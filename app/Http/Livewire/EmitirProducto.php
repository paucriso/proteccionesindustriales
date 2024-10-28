<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmitirProducto extends Component
{
    public $productId;
    public $quantity = 1;


    public function incrementQuantity() {
        $this->quantity++;
    }

    public function decrementQuantity() {
        if ($this->quantity > 1) {
            $this->quantity--;
            }
    }

    public function render()
    {
        return view('livewire.emitir-producto');
    }
}
