<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/console', function () {
    return view('console');
})->name('console');

Route::get('/players', function () {
    return view('players');
})->name('players');