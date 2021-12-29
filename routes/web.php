<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/profile_update', [AdminController::class, 'profile'])->name('user.profile');
    Route::post('/profile_update', [AdminController::class, 'profileUpdate'])->name('profile.update');
    Route::post('/password_update', [AdminController::class, 'updatePassword'])->name('password.update');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('forget_password_form', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password');
    Route::post('forget_password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset_password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset_password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    });
    
