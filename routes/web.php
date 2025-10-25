<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

Route::get('/language/{locale}', function ($locale) {
    // Simpan pilihan bahasa ke dalam session
    session()->put('locale', $locale);
    // Arahkan pengguna kembali ke halaman sebelumnya
    return redirect()->back();
})->name('language.switch');

Route::get('/messages', function () {
    return view('messages');
});
Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->middleware('guest')
            ->name('login');
Route::resource('messages', MessageController::class)->middleware('auth');
Route::post('login', [AuthenticatedSessionController::class, 'store'])
            ->middleware('guest');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->middleware('auth')
            ->name('logout');

Route::get('/service/software-development', [PageController::class, 'softwareDevelopment'])
    ->name('service.software');

Route::get('/services/erp', function () {
    return view('services.erp');
})->name('services.erp');
    
Route::get('/services/pr', function () {
    return view('services.pr');
})->name('services.pr');
