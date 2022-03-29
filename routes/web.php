<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Mail\WelcomeMAil;
use Illuminate\Support\Facades\Mail;

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
});
Route::get('/mainlayout', function () {
    return view('.pages');
});


Route::resource('customers', CustomerController::class);


Route::get('csv-upload', [StudentController::class, 'indexForm'])->name('student-csv-upload');
Route::post('csv-upload', [StudentController::class, 'storeCsv'])->name('student-csv-upload');
Route::resource('students', StudentController::class);
Route::get('/email',function(){

    return new WelcomeMAil();
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
