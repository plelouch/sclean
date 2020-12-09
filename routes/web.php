<?php

use App\Http\Controllers\ParcourController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::prefix('profs')->group(function () {
    Route::get('/', [ProfessorController::class, 'index'])->name("profs_index");
    Route::get('/new', [ProfessorController::class, 'new'])->name("profs_new");
});

Route::prefix('parcours')->group(function () {
    Route::get('/', [ParcourController::class, 'index'])->name("parcour_index");
    Route::get('/new', [ParcourController::class, 'new'])->name("parcour_new");
});

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name("student_index");
    Route::get('/new', [StudentController::class, 'new'])->name("student_new");
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
