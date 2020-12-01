<?php

use App\Models\RateItem;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$cityFrom = 1;
	$cityTo = 2;
	$weight = 10;
	$volume = 5.01;

	$weightPrice = $volumePrice = 0;
	if ($weight) {
		$rate = RateItem::where([
			['city_from_id', $cityFrom],
			['city_to_id', $cityTo],
			['weight_from', '<=', $weight],
			['weight_to', '>=', $weight],
		])->orderBy('weight_from')
			->first();
		$weightPrice = $rate->price ?: 0;
	}

	if ($volume) {
		$rate = RateItem::where([
			['city_from_id', $cityFrom],
			['city_to_id', $cityTo],
			['volume_from', '<=', $volume],
			['volume_to', '>=', $volume],
		])->orderBy('volume_from')
			->first();
		$volumePrice = $rate->price ?: 0;
	}

	dump($weightPrice, $volumePrice);

});
