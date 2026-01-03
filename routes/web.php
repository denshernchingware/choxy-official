<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

/*
    |-------------------------------------------------------------------------- | Frontend Pages
    |-------------------------------------------------------------------------- */
    Route::get('/',[TemplateController::class, 'home' ])->name('home');
    Route::get('/about', [TemplateController::class, 'about'])->name('about');
    Route::get('/contact', [TemplateController::class, 'contact'])->name('contact');
    Route::get('/gallery', [TemplateController::class, 'gallery'])->name('gallery');
    Route::get('/admission', [TemplateController::class, 'admission'])
     ->name('apply');
    Route::get('/news-events', [TemplateController::class, 'newsEvents'])->name('newsEvents');
    Route::get('/school-life', [TemplateController::class, 'schoolLife'])->name('schoolLife');


    /*
    |--------------------------------------------------------------------------
    | Application Logic
    |--------------------------------------------------------------------------
    */
    Route::post('/apply', [TemplateController::class, 'application'])
    ->name('application.submit');
    Route::get('/applications/{application}/download',
    [TemplateController::class, 'download']
    )->name('applications.download');
    Route::post('/contact-submit', [TemplateController::class, 'contactSubmit'])->name('contact.submit');
