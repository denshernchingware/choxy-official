<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

//admission page
Route::get('/application', function () {
    return view('frontend.application');})->name('apply');

//contact page
Route::get('/contact', function () {
    return view('frontend.contact');})->name('contact');

//home page
Route::get('/', function () {
    return view('frontend.home');})->name('home');

//news and events page
Route::get('/news-events', function () {
    return view('frontend.newsEvents');})->name('newsEvents');

//schoollife page
Route::get('/school-Life', function () {
    return view('frontend.schoolLife');})->name('schoolLife');

//gallery page
Route::get('/gallery', function () {
    return view('frontend.gallery');})->name('gallery');

 //about page
Route::get('/about', function () {
    return view('frontend.about');})->name('about');


Route::post('/apply', [TemplateController::class, 'application'])->name('application');
Route::get('/applications/{application}/download',[TemplateController::class, 'download'])->name('applications.download');
