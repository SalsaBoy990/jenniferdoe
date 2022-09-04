<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\LandingController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [LandingController::class, 'index'])->name('landing.page');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');
});

Route::group(
    ['middleware' => ['web'], 'prefix' => 'admin'],
    function () {
        Route::get('meta', [MetaController::class, 'index'])->name('meta.index');
        Route::put('meta/{meta}', [MetaController::class, 'update'])->name('meta.update');

        Route::get('service', [ServiceController::class, 'index'])->name('service.index');
        Route::post('service', [ServiceController::class, 'store'])->name('service.store');
        Route::put('service/{service}', [ServiceController::class, 'update'])->name('service.update');
        Route::delete('service/{service}', [ServiceController::class, 'destroy'])->name('service.destroy');

        Route::get('qualification', [QualificationController::class, 'index'])->name('service.index');
        Route::post('qualification', [QualificationController::class, 'store'])->name('service.store');
        Route::put('qualification/{qualification}', [QualificationController::class, 'update'])->name('service.update');
        Route::delete('qualification/{qualification}', [QualificationController::class, 'destroy'])->name('service.destroy');
    }
);
