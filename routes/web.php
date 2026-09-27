<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\FormController;

Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', [FormController::class, 'submitForm']);

Route::get('/', function () {
    return view('welcome');
});
