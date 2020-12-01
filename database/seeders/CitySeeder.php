<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = Carbon::now();

	    DB::table('cities')->insert([
		    'name' => 'Новосибирск',
		    'from' => true,
		    'to' => false,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Томск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Северск (до КПП)',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Кемерово',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Анжеро-Судженск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Березовский',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Топки',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Болотное',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Юрга',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Промышленное',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Барнаул',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Заринск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Павловск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Новоалтайск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Тальменка',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Бийск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Новокузнецк',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Прокопьевск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Киселевск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Белово',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Ленинск-Кузнецкий',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Гурьевск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Салаир',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Бочаты',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Осинники',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Междуреченск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Мыски',
		    'to' => true,
		    'created_at' => $now,
	    ]);
	    DB::table('cities')->insert([
		    'name' => 'Красноярск',
		    'to' => true,
		    'created_at' => $now,
	    ]);
    }
}
