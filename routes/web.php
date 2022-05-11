<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'name' => 'Taylor',
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::all()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name
            ];
        }),
    ]);
});

Route::post('/logout', function () {
    dd('logout', request()->all());
});
