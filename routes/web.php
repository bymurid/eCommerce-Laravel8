<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Shop;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Route::get('/', "Shop\MainController@index"); // Ancien version de laravel ne fonctionne plus

Route::get('/', [Shop\MainController::class, 'index']);

Route::get('/produit/{id}', [Shop\MainController::class, 'produit'])->name('voir_produit');

Route::get('/categorie', [Shop\MainController::class, 'category']);

