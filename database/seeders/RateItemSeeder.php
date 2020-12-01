<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RateItemSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$now = Carbon::now();

		//в Томск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 2, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Северск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 1070, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 1400, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1670, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2530, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3260, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3860, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4660, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5455, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6255, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7060, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8650, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 3, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 865, 'created_at' => $now]);

		//в Кемерово
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 4, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Анжеро-Судженск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 3785, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 4120, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 4380, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 5020, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 5980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 6580, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 7380, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 8180, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 8970, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 9765, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 10565, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 11365, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 5, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1137, 'created_at' => $now]);

		//в Березовский
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 1865, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 2195, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 2465, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 3330, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 4060, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4660, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 5455, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 6255, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 7060, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 8650, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 9440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 6, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 944, 'created_at' => $now]);

		//в Топки
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 7, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Болотное
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 8, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Юрга
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 9, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Промышленное
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 10, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Барнаул
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 11, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Заринск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 2065, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 2400, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 2660, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 3260, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3860, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4340, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4995, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5655, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6325, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 6990, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7650, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8320, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 12, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 832, 'created_at' => $now]);

		//в Павловск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 2065, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 2400, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 2660, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 3260, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3860, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4340, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4995, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5655, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6325, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 6990, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7650, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8320, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 13, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 832, 'created_at' => $now]);

		//в Новоалтайск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 14, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Тальменьку
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 440, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1100, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2050, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 2855, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 3520, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 4395, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 5275, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 6155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 7035, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 7915, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 8800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 15, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 880, 'created_at' => $now]);

		//в Бийск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 460, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1270, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2430, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3465, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4390, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 5490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 6590, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 7690, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 8785, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 9880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 10980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 16, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1098, 'created_at' => $now]);

		//в Новокузнецк
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 460, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1270, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2430, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3465, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4390, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 5490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 6590, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 7690, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 8785, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 9880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 10980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 17, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1098, 'created_at' => $now]);

		//в Прокопьевск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 460, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1270, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2430, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3465, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4390, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 5490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 6590, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 7690, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 8785, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 9880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 10980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 18, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1098, 'created_at' => $now]);

		//в Киселевск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 460, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1270, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2430, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3465, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4390, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 5490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 6590, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 7690, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 8785, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 9880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 10980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 19, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1098, 'created_at' => $now]);

		//в Белово
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 460, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1270, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2430, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3465, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4390, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 5490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 6590, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 7690, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 8785, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 9880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 10980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 20, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1098, 'created_at' => $now]);

		//Ленинск-Кузнецкий
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 460, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1270, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 2430, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 3465, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 4390, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 5490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 6590, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 7690, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 8785, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 9880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 10980, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 21, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1098, 'created_at' => $now]);

		//Гурьевск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 1965, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 2490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 2770, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 3930, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 4970, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 5880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 6985, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 8085, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 9185, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 10280, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 11380, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 12475, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 22, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1248, 'created_at' => $now]);

		//Салаир
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 1965, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 2490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 2770, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 3930, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 4970, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 5880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 6985, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 8085, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 9185, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 10280, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 11380, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 12475, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 23, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1248, 'created_at' => $now]);

		//Бочаты
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 1965, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 2490, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 2770, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 3930, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 4970, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 5880, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 6985, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 8085, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 9185, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 10280, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 11380, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 12475, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 24, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1248, 'created_at' => $now]);

		//Осинники
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 2195, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 2720, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 3005, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 4160, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 5200, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 6120, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 6570, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 8320, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 9420, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 10510, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 11610, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 12705, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 25, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1271, 'created_at' => $now]);

		//Междуреченск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 2770, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 3290, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 3580, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 4740, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 5775, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 6700, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 7800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 8895, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 10000, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 11090, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 12190, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 13280, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 26, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1328, 'created_at' => $now]);

		//Мыски
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 2770, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 3290, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 3580, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 4740, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 5775, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 6700, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 7800, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 8895, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 10000, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 11090, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 12190, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 13280, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 27, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1328, 'created_at' => $now]);

		//Красноярск
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 0, 'weight_to' => 20, 'volume_from' => 0,'volume_to' => 0.1, 'price' => 840, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 20.1, 'weight_to' => 100, 'volume_from' => 0.11,'volume_to' => 0.5, 'price' => 1155, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 101, 'weight_to' => 200, 'volume_from' => 0.51,'volume_to' => 1, 'price' => 1620, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 201, 'weight_to' => 400, 'volume_from' => 1.01,'volume_to' => 2, 'price' => 3235, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 401, 'weight_to' => 600, 'volume_from' => 2.01, 'volume_to' => 3, 'price' => 4850, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 601, 'weight_to' => 800, 'volume_from' => 3.01, 'volume_to' => 4, 'price' => 6010, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 801, 'weight_to' => 1000, 'volume_from' => 4.01, 'volume_to' => 5, 'price' => 7510, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 1001, 'weight_to' => 1200, 'volume_from' => 5.01, 'volume_to' => 6, 'price' => 9010, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 1201, 'weight_to' => 1400, 'volume_from' => 6.01, 'volume_to' => 7, 'price' => 10510, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 1401, 'weight_to' => 1600, 'volume_from' => 7.01, 'volume_to' => 8, 'price' => 12015, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 1601, 'weight_to' => 1800, 'volume_from' => 8.01, 'volume_to' => 9, 'price' => 13515, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 1801, 'weight_to' => 2000, 'volume_from' => 9.01, 'volume_to' => 10, 'price' => 15015, 'created_at' => $now]);
		DB::table('rate_items')->insert(['city_from_id' => City::CITY_NSK, 'city_to_id' => 28, 'weight_from' => 2001, 'weight_to' => null, 'volume_from' => 10.01, 'volume_to' => null, 'price' => 1501, 'created_at' => $now]);
	}
}
