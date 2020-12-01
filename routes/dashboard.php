<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RateItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('cities', [CityController::class, 'index'])->name('cities');

Route::get('cities/create', [CityController::class, 'create'])
	->name('cities.create');

Route::get('cities/{id}', [CityController::class, 'show'])
	->where('id', '[0-9]+')
	->name('cities.show');

Route::post('cities', [CityController::class, 'store'])
	->name('cities.store');

Route::get('cities/{id}/edit', [CityController::class, 'edit'])
	->where('id', '[0-9]+')
	->name('cities.edit');

Route::put('cities/{id}', [CityController::class, 'update'])
	->where('id', '[0-9]+')
	->name('cities.update');

Route::delete('cities/{id}', [CityController::class, 'destroy'])
	->where('id', '[0-9]+')
	->name('cities.destroy');

Route::put('cities/{id}/restore', [CityController::class, 'restore'])
	->where('id', '[0-9]+')
	->name('cities.restore');

Route::get('rates', [RateItemController::class, 'index'])
	->name('rates');

Route::get('rates/create', [RateItemController::class, 'create'])
	->name('rates.create');

Route::get('rates/{id}', [RateItemController::class, 'show'])
	->where('id', '[0-9]+')
	->name('rates.show');

Route::post('rates', [RateItemController::class, 'store'])
	->name('rates.store');

Route::get('rates/{id}/edit', [RateItemController::class, 'edit'])
	->where('id', '[0-9]+')
	->name('rates.edit');

Route::put('rates/{id}', [RateItemController::class, 'update'])
	->where('id', '[0-9]+')
	->name('rates.update');

Route::delete('rates/{id}', [RateItemController::class, 'destroy'])
	->where('id', '[0-9]+')
	->name('rates.destroy');

Route::put('rates/{id}/restore', [RateItemController::class, 'restore'])
	->where('id', '[0-9]+')
	->name('rates.restore');
