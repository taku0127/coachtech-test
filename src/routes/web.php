<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class,'index']);
Route::post('/confirm', [ContactController::class,'confirm']);
Route::post('/thanks', [ContactController::class,'store']);

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class,'index']);
    Route::delete('/delete',[AdminController::class,'destroy']);
    Route::get('/admin/search',[AdminController::class,'search']);
    Route::get('/admin/export_csv',[AdminController::class,'exportCsv'])->name('exportCsv');
});
