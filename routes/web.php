<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'name' => 'Taylor',
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name
                ];
            }),
        'filters' => Request::only(['search'])
    ]);
});

Route::post('/logout', function () {
    dd('logout', request()->all());
});
