<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\MainSliderController;
use App\Http\Controllers\Admin\OfficeController;

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


    Route::get('/dashboard/cities', [CityController::class, 'index']);

    Route::get('/dashboard/cities/create', [CityController::class, 'create'])->name('admin.cities-create');

    Route::post('/dashboard/cities/store', [CityController::class, 'store'])->name('admin.cities-store');

    Route::get('/dashboard/cities/{id}', [CityController::class, 'show'])->name('admin.cities-show');

    Route::get('/dashboard/cities/{id}/edit', [CityController::class, 'edit'])->name('admin.cities-edit');

    Route::post('/dashboard/cities/{id}/update', [CityController::class, 'update'])->name('admin.cities-update');

    Route::get('/dashboard/cities/{id}/destroy', [CityController::class, 'destroy'])->name('admin.cities-destroy');
    

    Route::get('/dashboard/participants', [ParticipantController::class, 'index']);

    Route::get('/dashboard/participants/create', [ParticipantController::class, 'create'])->name('admin.participants-create');

    Route::post('/dashboard/participants/store', [ParticipantController::class, 'store'])->name('admin.participants-store');

    Route::get('/dashboard/participants/{id}', [ParticipantController::class, 'show'])->name('admin.participants-show');

    Route::get('/dashboard/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('admin.participants-edit');

    Route::post('/dashboard/participants/{id}/update', [ParticipantController::class, 'update'])->name('admin.participants-update');

    Route::get('/dashboard/participants/{id}/destroy', [ParticipantController::class, 'destroy'])->name('admin.participants-destroy');


    Route::get('/dashboard/main-slider', [MainSliderController::class, 'index']);

    // Route::get('/dashboard/main-slider/create', [MainSliderController::class, 'create'])->name('admin.main-slider-create');

    // Route::post('/dashboard/main-slider/store', [MainSliderController::class, 'store'])->name('admin.main-slider-store');

    Route::get('/dashboard/main-slider/{id}', [MainSliderController::class, 'show'])->name('admin.main-slider-show');

    Route::get('/dashboard/main-slider/{id}/edit', [MainSliderController::class, 'edit'])->name('admin.main-slider-edit');

    Route::post('/dashboard/main-slider/{id}/update', [MainSliderController::class, 'update'])->name('admin.main-slider-update');

    // Route::get('/dashboard/main-slider/{id}/destroy', [MainSliderController::class, 'destroy'])->name('admin.main-slider-destroy');


    Route::get('/dashboard/offices', [OfficeController::class, 'index']);

    Route::get('/dashboard/offices/create', [OfficeController::class, 'create'])->name('admin.offices-create');

    Route::post('/dashboard/offices/store', [OfficeController::class, 'store'])->name('admin.offices-store');

    Route::get('/dashboard/offices/{id}', [OfficeController::class, 'show'])->name('admin.offices-show');

    Route::get('/dashboard/offices/{id}/edit', [OfficeController::class, 'edit'])->name('admin.offices-edit');

    Route::post('/dashboard/offices/{id}/update', [OfficeController::class, 'update'])->name('admin.offices-update');

    Route::get('/dashboard/offices/{id}/destroy', [OfficeController::class, 'destroy'])->name('admin.offices-destroy');


    Route::get('/dashboard/contacts/edit', [OfficeController::class, 'edit'])->name('admin.contacts-edit');

    Route::post('/dashboard/contacts/update', [OfficeController::class, 'update'])->name('admin.contacts-update');

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