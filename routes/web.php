<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactoController;



/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[PostController::class,'index'])->name('posts.index');

Route::get('posts',[PostController::class,'index'])->name('posts.index');

Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('category/{category}',[PostController::class,'category'])->name('posts.category');

Route::get('tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('emails', [ContactoController::class,'index'])->name('emails.index');

Route::post('emails',[ContactoController::class,'store'])->name('emails.store');
