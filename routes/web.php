<?php
use App\Http\Controllers\IsekaiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('bil_prima',[IsekaiController::class,'prima']);
Route::get('modulus',[IsekaiController::class,'modulus']);
Route::get('siswa',[IsekaiController::class,'huruf']);
