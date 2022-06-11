<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorSpecialtyController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PatientController::class, 'create']);
Route::post('/Patientstore', [PatientController::class, 'store']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';

// Route::prefix('doctor')->controller(DoctorController::class)->middleware(['auth'])->group(function () {
//     Route::get('/all',  'index');
//     Route::get('/add', 'create');
//     Route::post('/store',  'store');
//     Route::get('/delete/{id}',  'destroy');
//     Route::get('/edit/{id}',  'edit');
//     Route::post('/update',  'update');
// });

// Route::prefix('doctorSpecialty')->controller(DoctorSpecialtyController::class)->middleware(['auth'])->group(function () {
//     Route::get('/all',  'index');
//     Route::get('/add', 'create');
//     Route::post('/store',  'store');
//     Route::get('/delete/{id}',  'destroy');
//     Route::get('/edit/{id}',  'edit');
//     Route::post('/update',  'update');
// });

// Route::prefix('disease')->controller(DiseaseController::class)->middleware(['auth'])->group(function () {
//     Route::get('/all',  'index');
//     Route::get('/add', 'create');
//     Route::post('/store',  'store');
//     Route::get('/delete/{id}',  'destroy');
//     Route::get('/edit/{id}',  'edit');
//     Route::post('/update',  'update');
// });

// Route::prefix('appointment')->controller(AppointmentController::class)->middleware(['auth'])->group(function () {
//     Route::get('/all',  'index');
//     Route::get('/add', 'create');
//     Route::post('/store',  'store');
//     Route::get('/delete/{id}',  'destroy');
//     Route::get('/edit/{id}',  'edit');
//     Route::post('/update',  'update');
// });

// Route::prefix('patient')->controller(PatientController::class)->middleware(['auth'])->group(function () {
//     Route::get('/all',  'index');
//     Route::get('/add', 'create');
//     // Route::post('/store',  'store');
//     Route::get('/delete/{id}',  'destroy');
//     Route::get('/edit/{id}',  'edit');
//     Route::post('/update',  'update');
// });
