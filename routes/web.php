<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

/* Sin rol */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');;
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/homeAlumno', function () {
    return view('homeAlumno');
})->middleware(['auth', 'verified'])->name('homeAlumno');
Route::get('/discusion', function () {
    return view('alumnos.discusion');
})->middleware(['auth', 'verified']);
Route::get('/tramites/solicitud_justificante', function () {
    return view('alumnos.justificante');
})->middleware(['auth', 'verified']);

/* Con autenticación */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
