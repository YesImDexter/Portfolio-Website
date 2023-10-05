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

Route::match(['get', 'post'], '/', function () {
    $age = date("Y") - 2002;
    $mydata = [
        'name' => 'Dexter Skudd Anak John Rizal',
        'nationality' => 'Malaysian',
        'location' => 'Kuching, Sarawak',
        'age'  => $age,
        'gender' => 'Male',
        'email' => 'DexterS0202@gmail.com'
    ];

    return view('index')->with('mydata', $mydata);
})->name('main.index');

Route::post('/store', [MainController::class, 'store'])->name('main.store');
// Route::post('/store', MainController::class, 'store');
// Route::resource('companies', MainController::class);
