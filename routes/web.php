<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('profile', ProfileController::class)->middleware("auth")->name('profile');
Route::get('home', [HomeController::class, 'index'])->middleware("auth")->name('home');
Route::resource('employees', EmployeeController::class)->middleware("auth");
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');