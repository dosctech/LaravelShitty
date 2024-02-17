<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AppointmentController;
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

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

// routes/web.php

Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');

Route::get('/create-appointment', [AppointmentController::class, 'create'])->name('create-appointment');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/list', [AppointmentController::class, 'index'])->name('home');



Route::get('/', [AppointmentController::class, 'index'])->name('appointment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/create-appointment', [AppointmentController::class, 'create'])->name('create-appointment');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

    // Read
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');

    // Update
    Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');

    // Delete
    Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');