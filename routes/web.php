<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrintController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'main']);

Route::get('/create', [CVController::class, 'create'])->name('CV.create');
Route::post('/add', [CVController::class, 'add'])->name('CV.add');
Route::post('/{id}', [CVController::class, 'update'])->name('CV.update');
Route::get('/{id}/edit', [CVController::class, 'edit'])->name('CV.edit');
Route::post('/{id}/delete', [CVController::class, 'delete'])->name('CV.delete');

Route::get('/{id}/print', [PrintController::class, 'print']);
