<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventCalendar\CalendarController;
use App\Http\Controllers\EventCalendar\EventController;
use App\Http\Controllers\EventCalendar\MenuController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 機能選択
Route::controller(MenuController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// カレンダー
Route::controller(CalendarController::class)->group(function () {
    Route::get('/calendar', 'index')->name('calendar.index');
});

// イベント
Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'index')->name('event.index');
});

require __DIR__.'/auth.php';
