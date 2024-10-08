<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; // A importação do controlador deve ser correta

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

