<?php

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

Route::get('/welcome', function () {
    return view('LOGIN/welcome');
})->name('welcome');
Route::get('/', function () {
    return view('principal');
});
Route::get('/InscripcionCaso1Error', function () {
    return view('INSCRIPCION/InscripcionCaso1Error');
})->name('InscripcionCaso1Error');
Route::get('/InscripcionCaso2Error', function () {
    return view('INSCRIPCION/InscripcionCaso2Error');
})->name('InscripcionCaso2Error');
Route::get('/InscripcionCaso1Ok', function () {
    return view('INSCRIPCION/InscripcionCaso1Ok');
})->name('InscripcionCaso1Ok');
Route::get('/InscripcionCaso2Ok', function () {
    return view('INSCRIPCION/InscripcionCaso2Ok');
})->name('InscripcionCaso1Ok');
Route::get('/InscripcionCaso3SinLev', function () {
    return view('INSCRIPCION/InscripcionCaso3SinLev');
})->name('InscripcionCaso3SinLev');
Route::get('/RetiroEscena1', function () {
    return view('RETIRO/RetiroEscena1');
})->name('RetiroEscena1');
Route::get('/RetiroEscena2', function () {
    return view('RETIRO/RetiroEscena2');
})->name('RetiroEscena2');
Route::get('/RetiroEscena3', function () {
    return view('RETIRO/RetiroEscena3');
})->name('RetiroEscena3');
Route::get('/Adicion', function () {
    return view('ADICION/AdicionCaso1');
})->name('AdicionCaso1');

