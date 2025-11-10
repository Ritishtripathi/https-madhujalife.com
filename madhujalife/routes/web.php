<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/product-details', [WebsiteController::class, 'productdetails'])->name('productdetails');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
