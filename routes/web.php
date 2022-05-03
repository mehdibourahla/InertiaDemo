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
        'time' => now()->toTimeString(),
    ]);
});

Route::post('/logout', function () {
    dd('logout', request()->all());
});
