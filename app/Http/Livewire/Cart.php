<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Cart extends Component
{
    public $items = [];
    public $productId;
    protected $listeners = [
        'refreshProductList' => 'actualizar'
    ];

    public function mount()
    {
        $this->items = session('quotation', []);
    }

    public function actualizar() {
        $this->items = session('quotation', []);

    }

    public function render()
    {
        return view('livewire.cart');
    }
}
