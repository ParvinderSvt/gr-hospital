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
Route::get('/mission-vision', function () {
    return view('mission');
});
Route::get('/department', function () {
    return view('department');
});
Route::get('/doctors', function () {
    return view('doctors');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
