<?php

use App\Http\Controllers\auth\AuthController;
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





Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/action-register', [AuthController::class, 'action_register'])->name('action-register');

Route::middleware(['auth'])->group(function () {
    
    
    // Route prefix untuk Produsen

    Route::prefix('admin')->name('admin.')->middleware('CekUserLogin:1')->group(function () {

    });
    

    Route::prefix('pengawas')->name('pengawas.')->middleware('CekUserLogin:2')->group(function () {

    });

});