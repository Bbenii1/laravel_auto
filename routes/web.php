<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkaController;
use App\Http\Controllers\OrszagController;
use App\Http\Controllers\ModellController;

Route::get('/', function () {
    return view('index');
});

route::get('marka', MarkaController::class . '@index')->name('marka.index');
route::post('marka', MarkaController::class . '@store')->name('marka.store');
route::get('marka/create', MarkaController::class . '@create')->name('marka.create');
route::get('marka/{id}', MarkaController::class . '@show')->name('marka.show');
route::get('marka/{id}/edit', MarkaController::class . '@edit')->name('marka.edit');
route::put('marka/{id}', MarkaController::class . '@update')->name('marka.update');
route::delete('marka/{id}', MarkaController::class . '@destroy')->name('marka.destroy');

route::get('orszag', OrszagController::class . '@index')->name('orszag.index');
route::post('orszag', OrszagController::class . '@store')->name('orszag.store');
route::get('orszag/create', OrszagController::class . '@create')->name('orszag.create');
route::get('orszag/{id}', OrszagController::class . '@show')->name('orszag.show');
route::get('orszag/{id}/edit', OrszagController::class . '@edit')->name('orszag.edit');
route::put('orszag/{id}', OrszagController::class . '@update')->name('orszag.update');
route::delete('orszag/{id}', OrszagController::class . '@destroy')->name('orszag.destroy');


route::get('modell', ModellController::class . '@index')->name('modell.index');
route::post('modell', ModellController::class . '@store')->name('modell.store');
route::get('modell/create', ModellController::class . '@create')->name('modell.create');
route::get('modell/{id}', ModellController::class . '@show')->name('modell.show');
route::get('modell/{id}/edit', ModellController::class . '@edit')->name('modell.edit');
route::put('modell/{id}', ModellController::class . '@update')->name('modell.update');
route::delete('modell/{id}', ModellController::class . '@destroy')->name('modell.destroy');
