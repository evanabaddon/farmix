<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/service-details', [FrontendController::class, 'serviceDetails'])->name('service-details');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])->name('blog.details');
Route::get('/blog/category/{slug}', [FrontendController::class, 'blogByCategory'])->name('blog.category');
Route::get('/blog/tag/{slug}', [FrontendController::class, 'blogByTag'])->name('blog.tag');

Route::get('/product', [FrontendController::class, 'product'])->name('product');
Route::get('/product/{slug}', [FrontendController::class, 'productDetails'])->name('product-details');
Route::get('/cart', [FrontendController::class, 'cart']);
Route::get('/checkout', [FrontendController::class, 'checkout']);
Route::get('/project', [FrontendController::class, 'project']);
Route::get('/project-details', [FrontendController::class, 'projectDetails']);
Route::get('/team-details', [FrontendController::class, 'teamDetails']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
