<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;


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

// Public routes...
Route::get('/', [LandingController::class, 'index'])->name('landing.page');

// Routes only for authenticated users...
Route::group(
    ['middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'], 'prefix' => 'admin'],
    function () {
        Route::get('dashboard', function () {
            return view('admin/dashboard');
        })->name('dashboard');

        Route::get('meta', [MetaController::class, 'index'])->name('meta.index');
        Route::put('meta/{meta}', [MetaController::class, 'update'])->name('meta.update');

        Route::get('service', [ServiceController::class, 'index'])->name('service.index');
        Route::post('service', [ServiceController::class, 'store'])->name('service.store');
        Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
        Route::get('service/{service}', [ServiceController::class, 'show'])->name('service.show');
        Route::put('service/{service}', [ServiceController::class, 'update'])->name('service.update');
        Route::delete('service/{service}', [ServiceController::class, 'destroy'])->name('service.destroy');

        Route::get('qualification', [QualificationController::class, 'index'])->name('qualification.index');
        Route::post('qualification', [QualificationController::class, 'store'])->name('qualification.store');
        Route::get('qualification/{qualification}', [QualificationController::class, 'show'])->name('qualification.show');
        Route::put('qualification/{qualification}', [QualificationController::class, 'update'])->name('qualification.update');
        Route::delete('qualification/{qualification}', [QualificationController::class, 'destroy'])->name('qualification.destroy');


        Route::get('user', [UserController::class, 'index'])->name('user.index');
        Route::post('user', [UserController::class, 'store'])->name('user.store');
        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    }
);
