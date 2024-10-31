<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Carousel extends Component
{

    public $perPage = 4;
    public $loadAmount = 4;
    public bool $hasMore = false;

    public function loadMore()
    {
        $this->perPage += $this->loadAmount;
    }

    public function render()
    {
        $destacados = Product::where('featured', 1)->take($this->perPage)->get();

        // Verificar si hay más productos destacados para cargar
        $totalDestacados = Product::where('featured', 1)->count();
        $this->hasMore = $totalDestacados > $this->perPage;

        return view('livewire.carousel', ['destacados' => $destacados]);
    }
}
