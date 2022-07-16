<?php

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
    return view('hero');
});


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/courses', function () {
    return view('courses');
})->name('courses');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/services', function () {
    return view('services');
})->name('services');


Route::post('/send-contact', [App\Http\Controllers\ContactController::class, 'store'])->name('send_contact');