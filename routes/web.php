<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('tickets', TicketController::class);
Route::resource('users', UserController::class);
