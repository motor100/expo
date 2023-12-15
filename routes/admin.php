<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ParticipantController;

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


// Admin
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    

    Route::get('/dashboard/participants', [ParticipantController::class, 'index']);

    Route::get('/dashboard/participants/create', [ParticipantController::class, 'create'])->name('admin.participants-create');

    Route::post('/dashboard/participants/store', [ParticipantController::class, 'store'])->name('admin.participants-store');

    Route::get('/dashboard/participants/{id}', [ParticipantController::class, 'show'])->name('admin.participants-show');

    Route::get('/dashboard/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('admin.participants-edit');

    Route::post('/dashboard/participants/{id}/update', [ParticipantController::class, 'update'])->name('admin.participants-update');

    Route::get('/dashboard/participants/{id}/destroy', [ParticipantController::class, 'destroy'])->name('admin.participants-destroy');


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