<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Contacto;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->controller(Contacto::class)->group(function () {
    Route::get('/contactanos', 'showContactanos')->name('show_contactanos');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->controller(HomeController::class)->group(function () {
    // Route::get('/dashboard', 'apps')->name('show_apps');
    // Route::get('/dashboard', function () {
    //     return view('home');
    // });
});
