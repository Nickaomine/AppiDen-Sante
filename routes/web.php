<?php

use App\Http\Controllers\CollecteController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\MaladiesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::prefix('collecte')->group(function(){
        Route::get('/',[CollecteController::class,'index'])->name('collecte');
});
Route::prefix('affiches')->group(function(){
    Route::get('/',[DetailsController::class,'index'])->name('affiches');
});
Route::post('/save',[CollecteController::class,'save_collecte']);
});
Route::get('/search_collecte',[DetailsController::class,'search_collecte']);

