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
    return view('home');
})->name('home');

Route::get('/listings', function () {
    return view('pages.listings');
})->name('listings');

Route::get('/property', function () {
    return view('pages.property');
})->name('property');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/policy', function () {
    return view('pages.policy');
})->name('policy');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('/blog-details', function () {
    return view('pages.blog_details');
})->name('blog-details');


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/my-favorites', function () {
    return view('dashboard.my_favourites');
})->name('favorites');

Route::get('/my-properties', function () {
    return view('dashboard.my_properties');
})->name('properties');

Route::get('/invoices', function () {
    return view('dashboard.my_invoices');
})->name('invoices');

Route::get('/profile', function () {
    return view('dashboard.profile');
})->name('profile');

Route::get('/add-property', function () {
    return view('dashboard.add_property');
})->name('add-property');

Route::get('/reviews', function () {
    return view('dashboard.reviews');
})->name('reviews');
