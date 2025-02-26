<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\QuoteController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/faqs', [FrontendController::class, 'faqs'])->name('frontend.faqs');
Route::get('/terms-and-conditions', [FrontendController::class, 'terms'])->name('frontend.terms');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('frontend.privacyPolicy');
Route::get('/services', [FrontendController::class, 'services'])->name('frontend.services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact', [FrontendController::class, 'contactPost'])->name('frontend.contactPost');

Route::get('/get-quote', [QuoteController::class, 'getQuote'])->name('frontend.getQuote');