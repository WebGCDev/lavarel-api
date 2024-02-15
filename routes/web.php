<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;

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

Route::middleware(['auth','verified'])
    //nome
    ->name('admin.')
    //prefisso
    ->prefix('admin')

    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('projects', ProjectController::class);

        //es altra rotta
        // Route::get('/gaetano', function () {
        //     return view('dashboard');
        // })->name('gaetano');

    });

require __DIR__.'/auth.php';
