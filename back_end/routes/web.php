<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\apprenantController;

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

//groupes
Route::get('/groupe', [GroupeController::class, 'index'])->name('groupe');
Route::get('/addGroupe', [GroupeController::class, 'insert_page'])->name('AddGroupe');
Route::post('/insert_Groupe', [GroupeController::class, 'insert'])->name('insert_Groupe');
Route::get('/groupe/{id}', [GroupeController::class, 'get_groupe'])->name('get_groupe');
Route::delete('/groupe/delete/{id}', [GroupeController::class, 'delete'])->name('delete_groupe');
Route::put('/groupe/edit/{id}', [GroupeController::class, 'edit'])->name('edit_groupe');


Route::get('/export-Groupes', [GroupeController::class, 'exportGroupes'])->name('export_groupes');

//apprenants
Route::get('/Apprenants', [apprenantController::class, 'index'])->name('apprenant');
Route::get('/export-apprenants', [apprenantController::class, 'exportApprenant'])->name('export_apprenants');
Route::post('/import-apprenants', [apprenantController::class, 'importApprenant'])->name('import_apprenants');

