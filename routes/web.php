<?php

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

use App\Http\Controllers\MachineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FirtAcessController;

Route::get('/',[MachineController::class, 'index']);
Route::post('/FirstAcess', [FirtAcessController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/applications/createApplication',[MachineController::class, 'createMachine']);
    Route::get('/applications/listApplication',[MachineController::class, 'listMachine']);
    Route::get('/applications/archivedApplication',[MachineController::class, 'archivedMachine']);
    Route::get('/applications/listUsers',[UserController::class, 'listUsers']);
    Route::get('/applications/newUser', [UserController::class, 'createUser']);
    Route::get('/applications/{id}', [MachineController::class, 'show']);
    Route::post('/applications/registerNewUser', [UserController::class, 'store']);
    Route::post('/applications', [MachineController::class, 'store']);
});