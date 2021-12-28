<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    TagController
};
use App\Http\Controllers\Auth\{
    AuthController,
};

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
    return view('auth.login');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');


Route::middleware('checkAuth')->group(static function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('tags', TagController::class);
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
});
