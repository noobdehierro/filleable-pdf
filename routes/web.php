<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use mikehaertl\pdftk\Pdf;

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

Route::get('/convenio-oaxaca', [FormController::class, 'oaxaca'])->name('form.oaxaca');
Route::get('/convenio-morelos', [FormController::class, 'morelos'])->name('form.morelos');
Route::get('/convenio-salud-morelos', [FormController::class, 'salud_morelos'])->name('form.salud_morelos');
Route::get('/convenio-guerrero', [FormController::class, 'guerrero'])->name('form.guerrero');

Route::post('/store', [FormController::class, 'store'])->name('form.store');
