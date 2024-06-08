<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function()
{
    Route::view('schools', 'schools.index')
    ->middleware(['auth'])
    ->name('schools.index');

    Route::view('schools/create', 'schools.create')
    ->middleware(['auth'])
    ->name('schools.create');

    Route::view('annees', 'annees.index')
    ->middleware(['auth'])
    ->name('annees.index');

});
