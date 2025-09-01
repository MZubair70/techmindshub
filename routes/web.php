<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Contact Route
Route::post('/send-contact', [ContactController::class, 'send'])->name('contact.send');


Route::get('/', function () {
    return view('index');
})->name('home');