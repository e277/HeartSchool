<?php

use App\Http\Controllers\Admin\EnrollmentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\XmlController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentApplyController;
use App\Http\Controllers\StudentCourseController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

require __DIR__.'/auth.php';



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');

Route::get('', [PagesController::class, 'index']);
Route::get('about', [PagesController::class, 'about']);
Route::get('blog', [PagesController::class, 'blog']);
Route::get('contact', [PagesController::class, 'contact']);
Route::get('course', [PagesController::class, 'course']);

Route::middleware('auth')->group(function () {

    Route::resource('student-apply',StudentApplyController::class);
    Route::resource('student-course', StudentCourseController::class);
    Route::resource('student-profile', ProfileController::class);

    Route::get('student-payment', [StripePaymentController::class, 'stripe']);
    Route::post('student-payment', [StripePaymentController::class, 'stripePost'])->name('student.make-payment');

    Route::middleware('isAdmin')->group(function () {
    
        Route::view('dashboard', 'admin.index')->name('dashboard');
        Route::resource('dashboard/enroll', EnrollmentController::class);
        Route::resource('dashboard/course', CourseController::class);
        
        Route::get('/dashboard/create-xml', [XmlController::class, 'createXml'])->name('create');
        Route::get('/dashboard/read-xml', [XmlController::class, 'readXml'])->name('read');
        Route::get('/dashboard/download-xml', [XmlController::class, 'downloadXml'])->name('download');
    });
});
