<?php

use App\Models\Day;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::post('/update/{$id}', [\App\Http\Controllers\HomeController::class, 'update'])->name('home.update');

Route::get('visitor', [\App\Http\Controllers\VisitorController::class, 'index'])->name('visitor.index');
Route::post('visitor/store', [\App\Http\Controllers\VisitorController::class, 'store'])->name('visitor.store'); 
Route::delete('visitor/delete/{id}', [\App\Http\Controllers\VisitorController::class, 'destroy'])->name('visitor.delete');
Route::get('visitor/pdf', [\App\Http\Controllers\VisitorController::class, 'pdf'])->name('visitor.pdf');



Route::get('teacher/{hari}', [\App\Http\Controllers\TeacherController::class, 'teacher'])->name('teacher.days');
Route::post('teacher/store', [\App\Http\Controllers\TeacherController::class, 'store'])->name('teacher.store'); 
Route::delete('teacher/delete/{id}', [\App\Http\Controllers\TeacherController::class, 'destroy'])->name('teacher.delete');

Route::get('siswa', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::post('siswa/store', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::delete('siswa/delete/{id}', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('student.delete');
