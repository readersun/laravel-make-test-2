<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WeatherController extends Controller
{
    public function index()
    {
        return Inertia::render('Weather/Index');
    }
}
