<?php

use App\Http\Controllers\EmailController;

use App\Http\Controllers\DreamcController;
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

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get("send-email", [EmailController::class, "sendEmail"]);
// Route::get("payment", [EmailController::class, "payment"]);
Route::get('/assess', function () {
    return view('assess');
});

Route::get('dreamc',[DreamcController::class, 'index'])->middleware('auth');;
Route::get('dreamc/create',[DreamcController::class, 'create']);
Route::post('dreamc',[DreamcController::class, 'store']);
Route::get('dreamc/{id}',[DreamcController::class, 'show'])->middleware('auth');;


// Ignoring the remove part, the sass part
Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
