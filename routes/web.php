<?php

use App\Http\Controllers\zoneController;
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
 Route::resource('zone', zoneController::class);
// Route::view('form','zoneview');
//  Route::resource('region', regionController::class);
Route::resource('region','App\Http\Controllers\regionController');

Route::resource('territory','App\Http\Controllers\territoryController');
