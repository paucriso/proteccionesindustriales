<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('nosotros', [PageController::class, 'nosotros'])->name('pages.nosotros');
Route::get('contacto', [PageController::class, 'contacto'])->name('pages.contacto');
Route::get('blog', [PageController::class, 'blog'])->name('pages.blog');
Route::get('blog/{id}', [PageController::class, 'article'])->name('pages.article');

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
