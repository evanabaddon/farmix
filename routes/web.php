<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Additional routes for future pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/service-details', function () {
    return view('service-details');
})->name('service-details');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/project', function () {
    return view('project');
});

Route::get('/project-details', function () {
    return view('project-details');
});

Route::get('/team-details', function () {
    return view('team-details');
});
