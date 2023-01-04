<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TutorController;
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
});

Route::get("/Tutordashboard", [TutorController::class, 'index']);
Route::get("/addTutor", [TutorController::class, 'tutorForm']);
Route::post('/TuTorStore', [TutorController::class, 'storingTutor']);
Route::get("/EditTutor/{id}", [TutorController::class, 'editTutor']);
Route::post('/EditTutor/{id}', [TutorController::class, 'updateTutor']);
Route::get("DeleteTutor/{id}", [TutorController::class, 'deleteTutor']);

Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');
