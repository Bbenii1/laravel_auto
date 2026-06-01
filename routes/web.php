<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkaController;
use App\Http\Controllers\OrszagController;

Route::get('/', function () {
    return view('welcome');
});

route::get('marka', MarkaController::class . '@index')->name('marka.index');
route::post('marka', MarkaController::class . '@store')->name('marka.store');
route::get('marka/create', MarkaController::class . '@create')->name('marka.create');

route::get('orszag', OrszagController::class . '@index')->name('orszag.index');
route::post('orszag', OrszagController::class . '@store')->name('orszag.store');
route::get('orszag/create', OrszagController::class . '@create')->name('orszag.create');