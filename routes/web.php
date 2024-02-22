<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

Route::get('/hello_route', function() {
    print "<h1>Hello Wida dari Route langsung</h1>";
});

Route::get('/hello_view', function() {
    return view('hello');
});

//Route::get('/hello_controller', [HelloController::class, 'hello'])->name('h.controller');
// Route::get('/hello_controller_view', [HelloController::class, 'hello_view'])->name('h.controller.view');

Route::controller(HelloController::class)->group(function () {
    Route::get('/hello_controller', 'hello');
    Route::get('/hello_controller_view', 'hello_view');
});