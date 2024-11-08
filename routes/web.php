<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/data', [StudentsController::class, 'index']) -> name('home');
Route::get('/data/create', [StudentsController::class, 'create'])  -> name('create');
Route::get('/data/edit/{id}', [StudentsController::class, 'edit'])  -> name('edit');
Route::put('/data/update/{id}', [StudentsController::class, 'update'])  -> name('update');
Route::post('/data/store', [StudentsController::class, 'store']) -> name('store');
Route::delete('/delete/{id}', [StudentsController::class, 'destroy']) -> name('delete');
Route::get('/data/detail/{id}', [StudentsController::class, 'show']) -> name('detail');
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
