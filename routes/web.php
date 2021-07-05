<?php

use App\Models\Livre;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LivreController;

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
Route::get('/', [MainController::class, 'accueil'])->name('accueil');
Route::get('edit',[LivreController::class, 'edit']);
Route::resource('livres',LivreController::class);

  

 
 Route::get('/dashboard', function () {
 return view('front-office.livre.index');
 })->middleware(['auth'])->name('dashboard');


 require __DIR__.'/auth.php';
