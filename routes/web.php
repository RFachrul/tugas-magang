<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view(
        'dashboard',
        [
            "title" => "Dashboard"
        ]
    );
});


Route::get('login',[LoginController::class,'TampilLogin'])->name('login');
Route::post('PostLogin',[LoginController::class,'PostLogin'])->name('PostLogin');
