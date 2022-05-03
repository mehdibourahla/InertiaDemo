<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'name' => 'Taylor',
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'name' => 'Taylor',
    ]);
});

Route::post('/logout', function () {
    dd('logout', request()->all());
});
