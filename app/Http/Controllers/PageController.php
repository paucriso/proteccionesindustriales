<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        return view('pages.index');
    }

    public function nosotros() {
        return view('pages.nosotros');
    }

    public function contacto() {
        return view('pages.contacto');
    }

    public function blog() {
        return view('pages.blog');
    }

    public function article() {

        return view('pages.article');
    }
}
