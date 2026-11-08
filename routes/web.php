<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello World!']);
});
Route::get('/game', [GameController::class, 'index']);
Route::get('/game/{id}', [GameController::class, 'show']);
Route::get('/user/{id}', [UserController::class, 'show']);
