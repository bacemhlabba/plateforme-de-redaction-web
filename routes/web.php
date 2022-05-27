<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileShow;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProjetCreer;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('inscription_redacteur', [RegisteredUserController::class, 'create'])
                ->name('inscription_redacteur');

    Route::post('inscription_redacteur', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('depot_projet','depot_projet');
Route::post('add',[ProjetCreer::class,'addData']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('profile',[ProfileShow::class,'show'])->name('profile');
    Route::get('show_projets',[ProjetController::class,'show'])->name('show_projets');
     
});
require __DIR__.'/auth.php';
