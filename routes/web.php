<?php

use App\Http\Controllers\bishop;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('bishop', bishop::class);
