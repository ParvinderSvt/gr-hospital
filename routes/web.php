<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/properties', function () {
    return view('properties');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
Route::get('/property-details', function () {
    return view('property-details');
});
Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');
