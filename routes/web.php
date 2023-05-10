<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Pages\HomeController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\Pages\ServicesController::class, 'index'])->name('services');
Route::get('/gallery', [App\Http\Controllers\Pages\GalleryController::class, 'index'])->name('gallery');
Route::get('/reviews', [App\Http\Controllers\Pages\ReviewsController::class, 'index'])->name('reviews');
Route::get('/contact', [App\Http\Controllers\Pages\ContactController::class, 'index'])->name('contact');
Route::get('/products', [App\Http\Controllers\Pages\Products\ProductController::class, 'index'])->name('products');

Auth::routes();