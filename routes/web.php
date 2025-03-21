<?php

use App\Http\Controllers\GoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/goods', [GoodController::class, 'index'])
    ->name('goods.index');

Route::get('goods/create', [GoodController::class, 'create'])
    ->name('goods.create');

Route::post('goods', [GoodController::class, 'store'])
    ->name('goods.store');

Route::get('goods/{id}', [GoodController::class, 'show'])
    ->name('goods.show');

Route::get('goods/{id}/edit', [GoodController::class, 'edit'])
    ->name('goods.edit');

Route::patch('goods/{id}', [GoodController::class, 'update'])
    ->name('goods.update');

Route::delete('goods/{id}', [GoodController::class, 'destroy'])
    ->name('goods.destroy');
