<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
