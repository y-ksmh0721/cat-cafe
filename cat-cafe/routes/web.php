<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
//コントローラーを介さずに表示
Route::view('/', 'index');

