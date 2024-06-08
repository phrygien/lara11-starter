<?php

use App\Models\School;
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

    // Route::view('schools/{id}/edit', 'schools.edit')
    // ->middleware(['auth'])
    // ->name('schools.edit');

    Route::get('schools/{id}/edit', function (School $school, $id) {

        $school = School::find($id);
        return view('schools.edit', compact('school'));
    })->name('schools.edit');

    Route::view('annees', 'annees.index')
    ->middleware(['auth'])
    ->name('annees.index');

});
