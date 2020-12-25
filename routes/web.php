<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;


/*
|--------------------------------------------------------------------------
| Web Routes   composer require barryvdh/laravel-dompdf
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');

Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');
