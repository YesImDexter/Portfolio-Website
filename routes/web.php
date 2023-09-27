<?php

use App\Http\Controllers\MainController;
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

// Route::post('/', function () {
//     return view('index');
// })->name('main');

Route::get('/', function () {
    return view('index');
})->name('main.index');

Route::post('/store', [MainController::class, 'store'])->name('main.store');
// Route::resource('companies', MainController::class);
