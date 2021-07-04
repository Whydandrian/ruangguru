<?php

use Illuminate\Support\Facades\Route;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     // return view('welcome');
//     $response['a'] = Curl::to('https://us-central1-silicon-airlock-153323.cloudfunctions.net/rg-package-dummy')
//         ->withData( array( 'userId' => 'anugrahaman71' ) )
//         ->asJson()
//         ->get();
//     return dd($response['a']->user);

// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/ruangbelajar', [HomeController::class, 'product_ruangbelajar'])->name('ruangbelajar');
Route::post('/ruangbelajar_add', [HomeController::class, 'form_add']);
Route::get('/skillacademy', [HomeController::class, 'product_skillacademy'])->name('skillacademy');
Route::get('/englishacademy', [HomeController::class, 'product_englishacademy'])->name('englishacademy');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Auth::routes();