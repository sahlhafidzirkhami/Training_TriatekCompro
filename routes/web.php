<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

Route::get('/messages', function () {
    return view('messages');
});
Route::resource('messages', MessageController::class);

Route::get('/service/software-development', [PageController::class, 'softwareDevelopment'])
    ->name('service.software');

Route::get('/services/erp', function () {
    return view('services.erp');
})->name('services.erp');
    
Route::get('/services/pr', function () {
    return view('services.pr');
})->name('services.pr');