<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Dashboard/Index');
});

Route::get('/bus-route', function () {
    return Inertia::render('BusRoute/Index');
});

Route::get('/bus-arrival', function () {
    return Inertia::render('BusArrival/Index');
});

Route::post('/logout', function () {
    return Inertia::render('Auth/Login');
});