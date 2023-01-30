<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');

Route::get('/test', [TestController::class, 'index']); //->middleware('can:show-document')

//Auth::routes();



