<?php

use Illuminate\Support\Facades\Route;



Route::get('/test', function () {
    return view('welcome');
});

Route::get('/About',function () {
    return view('about');     
});

Route::get('/Post', function () {
    // return 'Post Page';
    return view('post');
});

Route::get('/profile', function () {
    // return 'Profile Page';
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/link', function () {
    return view('link');
});