<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact',[ContactController::class, 'index']);
Route::get('complete',[ContactController::class, 'complete']);
