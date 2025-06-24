<?php

use App\Http\Controllers\BusArrivalController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopMenuController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index']);

Route::get('/bus-route', [BusRouteController::class, 'index']);

Route::get('/bus-arrival', [BusArrivalController::class, 'index']);

Route::get('/weather', [WeatherController::class, 'index']);

Route::post('/logout', function () {
    return Inertia::render('Auth/Login');
});

Route::get('/top-menu', [TopMenuController::class, 'getTopMenuList']);