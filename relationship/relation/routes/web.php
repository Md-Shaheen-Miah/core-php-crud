<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserPhone;
use App\Models\User;
use App\Http\Controllers\UploadController;


Route::get('/', function () {
    $user = User::find(1); // User ID 1 খুঁজে বের করা
    
    return $user; // এখানে শুধুমাত্র একটি return প্রয়োজন
});



Route::get('file-upload', [UploadController::class, 'index'])->name('file.upload');
Route::post('file-upload', [UploadController::class, 'store'])->name('file-upload');