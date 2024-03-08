<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EnquiryController;
use App\Models\Appointment;
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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/faqs', function () {
    return view('faqs');
});

Route::post('/enquiry',EnquiryController::class,'store')->name('enquiry.store');

Route::resource('appointment',AppointmentController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
