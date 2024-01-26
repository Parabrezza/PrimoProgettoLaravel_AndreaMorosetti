<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Film_Controller;
use App\Http\Controllers\Anime_Controller;
use App\Http\Controllers\Cibo_Controller;
use App\Http\Controllers\Cartoni_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class , 'welcome'])->name('welcome');

Route::get('/Film', [Film_Controller::class, 'film'])->name('Film');

Route::get('/Anime', [Anime_Controller::class, 'anime'])->name('Anime');

Route::get('/Cartoni', [Cartoni_Controller::class, 'cartoni'])->name('Cartoni');

Route::get('/Cibo', [Cibo_Controller::class, 'cibo'])->name('Cibo');
  



