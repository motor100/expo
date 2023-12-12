<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainRuController;
use App\Http\Controllers\MainEnController;
use App\Http\Controllers\MainTrController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// RU
Route::get('/', [MainRuController::class, 'home'])->name('home');

Route::get('/for-participants', [MainRuController::class, 'for_participants']);

Route::get('/poster', [MainRuController::class, 'poster']);

Route::get('/participants', [MainRuController::class, 'participants']);

Route::get('/contacts', [MainRuController::class, 'contacts']);

Route::get('/event', [MainRuController::class, 'event']);

Route::get('/moscow', [MainRuController::class, 'moscow']);

// Route::get('/halal', [MainRuController::class, 'halal']);

// Route::get('/faq', [MainRuController::class, 'faq']);

Route::get('/privacy-policy', [MainRuController::class, 'privacy_policy']);


// EN
Route::get('/en', [MainEnController::class, 'home']);

Route::get('/en/for-participants', [MainEnController::class, 'for_participants']);

Route::get('/en/poster', [MainEnController::class, 'poster']);

Route::get('/en/participants', [MainEnController::class, 'participants']);

Route::get('/en/contacts', [MainEnController::class, 'contacts']);

Route::get('/en/event', [MainEnController::class, 'event']);

// Route::get('/en/halal', [MainEnController::class, 'halal']);

// Route::get('/en/faq', [MainEnController::class, 'faq']);

Route::get('/en/privacy-policy', [MainEnController::class, 'privacy_policy']);


// TR
Route::get('/tr', [MainTrController::class, 'home']);

Route::get('/tr/for-participants', [MainTrController::class, 'for_participants']);

Route::get('/tr/poster', [MainTrController::class, 'poster']);

Route::get('/tr/participants', [MainTrController::class, 'participants']);

Route::get('/tr/contacts', [MainTrController::class, 'contacts']);

Route::get('/tr/event', [MainTrController::class, 'event']);

// Route::get('/tr/halal', [MainTrController::class, 'halal']);

// Route::get('/tr/faq', [MainTrController::class, 'faq']);

Route::get('/tr/privacy-policy', [MainTrController::class, 'privacy_policy']);

Route::get('/ru', [MainRuController::class, 'home_ru']);


// Admin
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
