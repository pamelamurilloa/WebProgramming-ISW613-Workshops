<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource("/student", StudentController::class);

// Route::get('/careers', [CareerController::Class, 'index'])->name('careers.index');

// Route::get('/careers/form', [CareerController::Class, 'showForm'])->name('careers.form');



// Route::get('/students', [StudentController::Class, 'index'])->name('students.index');

// Route::get('/students/form', [StudentController::Class, 'showForm'])->name('students.form');