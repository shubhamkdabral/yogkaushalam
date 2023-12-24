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
    return view('front-end.index');
})->name('home');

Route::get('/about', function () {
    return view('front-end.about');
})->name('about');

Route::get('/services', function () {
    return view('front-end.service');
})->name('services');

Route::get('/price', function () {
    return view('front-end.price');
})->name('price');

Route::get('/class', function () {
    return view('front-end.class');
})->name('class');

Route::get('/team', function () {
    return view('front-end.team');
})->name('team');

Route::get('/pose', function () {
    return view('front-end.pose');
})->name('pose');

Route::get('/blog', function () {
    return view('front-end.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('front-end.contact');
})->name('contact');

Route::get('/single', function () {
    return view('front-end.single');
})->name('single');
