<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

Route::get('/messages', function () {
    return view('messages');
});
Route::resource('messages', MessageController::class);
