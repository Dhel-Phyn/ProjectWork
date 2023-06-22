<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CalendarController;

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

Route::get('/', function () {
    return view('/home');
});
//Auth::routes();

Route::resource('Home', HomeController::class);
Route::resource('calendar', CalendarController::class);
Route::resource('message', MessageController::class);

// Route for message
// Route::get('/message/index', [App\Http\Controllers\MessageController::class, 'index'])->name('index');



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

Route::resource("Faculty", FacultyController::class);
Route::get('/faculty', [App\Http\Controllers\FacultyController::class, 'index'])->name('faculty.index');

