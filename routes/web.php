<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

Route::get('/application', function () {
    return view('frontend.application');
})->name('apply');
Route::post('/apply', [TemplateController::class, 'application'])->name('application');
Route::get('/applications/{application}/download',[TemplateController::class, 'download'])->name('applications.download');
