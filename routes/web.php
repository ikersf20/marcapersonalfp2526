<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    return view('users.usersList', [
        'users' => [
            ['id' => 1, 'name' => 'Ana' ],
            ['id' => 2, 'name' => 'Luis' ],
            ['id' => 3, 'name' => 'Carlos']]
]);
});
