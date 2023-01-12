<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupeController;

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

Route::get('/groupe', [GroupeController::class, 'index'])->name('groupe');
Route::get('/addGroupe', [GroupeController::class, 'insert_page'])->name('AddGroupe');
Route::post('/insert_Groupe', [GroupeController::class, 'insert'])->name('insert_Groupe');
Route::get('/groupe/{id}', [GroupeController::class, 'get_groupe'])->name('get_groupe');
Route::get('/groupe/delete/{id}', [GroupeController::class, 'delete'])->name('delete_groupe');
Route::put('/groupe/edit/{id}', [GroupeController::class, 'edit'])->name('edit_groupe');

