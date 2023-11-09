<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatewayPayment;

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
    return view('stripe');
});
Route::post('/',[GatewayPayment::class,'index'])->name('index');
Route::get('/success',[GatewayPayment::class,'success']);
Route::get('/cancel',[GatewayPayment::class,'cancel']);


