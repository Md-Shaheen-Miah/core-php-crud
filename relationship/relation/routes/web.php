<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserPhone;
use App\Models\User;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    
    return view('welcome');
});




Route::get('file-upload', [UploadController::class, 'index'])->name('file.upload');
Route::post('file-upload', [UploadController::class, 'store'])->name('file-upload');