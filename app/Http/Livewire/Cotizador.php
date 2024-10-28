<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Cotizador extends Component
{
    public $items = [];
    public $product;
    public $quantity;


    protected $listeners = [
        'addToQuotation' => 'addItem',
        'updateQuantity' => 'updateItemQuantity',
        'removeFromQuotation' => 'removeItem',
        'agregarProducto' => 'addItem',
        'eliminarProducto' => 'removeItem',
        'updateItemQuantity',
        'agregarProductoSimple' => 'prueba'
    ];

    public function mount() {
        $this->items = session('quotation', []);
    }

    public function prueba() {
        dd('funciona');
    }

    public function addItem($productId, $quantity = 1)
    {
        $product = Product::find($productId);
        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] += $quantity;
        } else {
            $this->items[$productId] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }
        $this->saveQuotation();
    }

    public function updateItemQuantity($productId, $quantity)
    {
        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] = $quantity;
            $this->saveQuotation();
        }
    }

    public function removeItem($productId)
    {
        unset($this->items[$productId]);
        $this->saveQuotation();
        $this->emitTo('cart', 'refreshProductList');
    }

    private function saveQuotation()
    {
        session(['quotation' => $this->items]);
    }

    public function getItemsCount() {
        return count($this->items);
    }

    public function render()
    {
        return view('livewire.cotizador');
    }
}
