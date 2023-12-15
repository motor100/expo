<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainRuController;
use App\Http\Controllers\MainEnController;
use App\Http\Controllers\MainTrController;
use App\Http\Controllers\AjaxController;

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

Route::get('/moscow', [MainRuController::class, 'moscow']);

Route::get('/saint-petersburg', [MainRuController::class, 'saint_petersburg']);

Route::get('/dubai', [MainRuController::class, 'dubai']);

Route::get('/antalya', [MainRuController::class, 'antalya']);

Route::get('/alanya', [MainRuController::class, 'alanya']);

Route::get('/northern-cyprus', [MainRuController::class, 'northern_cyprus']);

Route::get('/baku', [MainRuController::class, 'baku']);

// Route::get('/halal', [MainRuController::class, 'halal']);

// Route::get('/faq', [MainRuController::class, 'faq']);

Route::get('/privacy-policy', [MainRuController::class, 'privacy_policy']);


// EN
Route::get('/en', [MainEnController::class, 'home']);

Route::get('/en/for-participants', [MainEnController::class, 'for_participants']);

Route::get('/en/poster', [MainEnController::class, 'poster']);

Route::get('/en/participants', [MainEnController::class, 'participants']);

Route::get('/en/contacts', [MainEnController::class, 'contacts']);

Route::get('/en/moscow', [MainEnController::class, 'moscow']);

Route::get('/en/saint-petersburg', [MainEnController::class, 'saint_petersburg']);

Route::get('/en/dubai', [MainEnController::class, 'dubai']);

Route::get('/en/antalya', [MainEnController::class, 'antalya']);

Route::get('/en/alanya', [MainEnController::class, 'alanya']);

Route::get('/en/northern-cyprus', [MainEnController::class, 'northern_cyprus']);

Route::get('/en/baku', [MainEnController::class, 'baku']);

// Route::get('/en/halal', [MainEnController::class, 'halal']);

// Route::get('/en/faq', [MainEnController::class, 'faq']);

Route::get('/en/privacy-policy', [MainEnController::class, 'privacy_policy']);


// TR
Route::get('/tr', [MainTrController::class, 'home']);

Route::get('/tr/for-participants', [MainTrController::class, 'for_participants']);

Route::get('/tr/poster', [MainTrController::class, 'poster']);

Route::get('/tr/participants', [MainTrController::class, 'participants']);

Route::get('/tr/contacts', [MainTrController::class, 'contacts']);

Route::get('/tr/moscow', [MainTrController::class, 'moscow']);

Route::get('/tr/saint-petersburg', [MainTrController::class, 'saint_petersburg']);

Route::get('/tr/dubai', [MainTrController::class, 'dubai']);

Route::get('/tr/antalya', [MainTrController::class, 'antalya']);

Route::get('/tr/alanya', [MainTrController::class, 'alanya']);

Route::get('/tr/northern-cyprus', [MainTrController::class, 'northern_cyprus']);

Route::get('/tr/baku', [MainTrController::class, 'baku']);

// Route::get('/tr/halal', [MainTrController::class, 'halal']);

// Route::get('/tr/faq', [MainTrController::class, 'faq']);

Route::get('/tr/privacy-policy', [MainTrController::class, 'privacy_policy']);


Route::get('/ru', [MainRuController::class, 'home_ru']);


// Ajax
Route::get('/ajax/we-use-cookie', [AjaxController::class, 'we_use_cookie']);


require __DIR__.'/auth.php';
