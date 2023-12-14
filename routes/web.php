<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
// nos conectamos directamente al controlador 
Route::get('/',[App\Http\Controllers\PostController::class,'index']);
