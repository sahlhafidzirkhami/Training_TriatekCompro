<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;

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
Route::resource('messages', MessageController::class)->middleware('auth');

Route::get('/service/software-development', [PageController::class, 'softwareDevelopment'])
    ->name('service.software');

require __DIR__.'/auth.php';