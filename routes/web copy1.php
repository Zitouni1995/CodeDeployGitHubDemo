<?php

use App\Http\Controllers\LivreController;
use App\Http\Controllers\TpController;
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
Route::resource('livres',LivreController::class);
Route::get('/', function () {
    return view('welcome');
//Route::get(ajouter-livre,TpController::class);
    
});
