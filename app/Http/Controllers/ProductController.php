<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('products.show', compact('product'));
    }

    public function busqueda(Request $request)
    {

        $query = $request->input('query');

        // Si no hay término de búsqueda, redirigir a la página principal
        if (empty($query)) {
            return redirect()->back();
        }

        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(10); // Ajusta el número según tus necesidades

        return view('products.busqueda', [
            'products' => $products,
            'search' => $query // Para mantener el término de búsqueda en el input
        ]);
    }
}
