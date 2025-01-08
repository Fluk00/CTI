<?php

use Illuminate\Support\Facades\Route;

// Default route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for the "Thank You" page
Route::get('/thankyou', function () {
    return view('thankyou'); // Make sure the 'thank-you.blade.php' exists in your views
})->name('thankyou');
