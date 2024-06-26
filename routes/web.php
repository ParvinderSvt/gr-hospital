<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::resource('/', IndexController::class);
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/mission-vision', function () {
    return view('mission');
});
// Route::get('/department', function () {
//     return view('department');
// });
Route::resource('/department', DepartmentController::class);
// Route::get('/doctors', function () {
//     return view('doctors');
// });
Route::resource('doctors', DoctorController::class);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/faqs', function () {
    return view('faqs');
});

Route::view('career','career')->name('career');

Route::post('/career-store', [CareerController::class, 'career'])->name('career.store');
Route::resource('gallery', GalleryController::class);

Route::resource('/enquiry', EnquiryController::class);

Route::resource('appointment', AppointmentController::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('migrate', function () {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('migrate');
});


Route::get('/storage-link', function () {
    $target = storage_path('app/public');
    $link = public_path('/storage');
    echo symlink($target, $link);
    // echo "symbolic link created successfully";
});
