<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\News;

class PageController extends Controller
{
    public function index() {
        $destacados = Product::where('featured', 1)->get();

        return view('pages.index', compact('destacados'));
    }

    public function nosotros() {
        return view('pages.nosotros');
    }

    public function contacto() {
        return view('pages.contacto');
    }

    public function article($id) {
        $article = News::find($id);
        return view('pages.article', compact('article'));
    }

    public function cotizacion() {
        return view('pages.cotizacion');
    }

    public function blog() {
        $articles = News::paginate(15);
        return view('pages.blog', compact('articles'));
    }
}
