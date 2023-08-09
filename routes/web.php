<?php

use App\Http\Controllers\TaskManagerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskManagerController::class,'index'])->name('home');

Route::get('task/create',[TaskManagerController::class,'create'])->name('task.create.show');
Route::post('task/create',[TaskManagerController::class,'store'])->name('task.create');

Route::get('task/edit/{id}',[TaskManagerController::class,'show'])->name('task.show');

Route::post('task/edit/{id}',[TaskManagerController::class,'update'])->name('task.update');

Route::get('task/delete/{id}',[TaskManagerController::class,'delete'])->name('task.delete');
Route::get('task/update/{id}/{status}',[TaskManagerController::class,'updateStatus'])->name('task.updateStatus');
