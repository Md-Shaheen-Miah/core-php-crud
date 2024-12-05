<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('crud/view', [ContactController::class, 'index']);
Route::get('crud/create', [ContactController::class, 'create']);