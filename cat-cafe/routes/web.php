<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index');
});

Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/contact',[ContactController::class, 'sendMail']);
Route::get('/complete',[ContactController::class, 'complete'])->name('contact.complete');
