<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
	const CITY_NSK = 1;

	use HasFactory, SoftDeletes;

	protected $casts = [
		'from' => 'boolean',
		'to' => 'boolean',
		'created_at' => 'datetime:d.m.Y h:i:s',
		'updated_at' => 'datetime:d.m.Y h:i:s',
		'deleted_at' => 'datetime:d.m.Y h:i:s',
	];

	public function ratesTo()
	{
		return $this->hasMany('App\Models\RateItem', 'city_to_id');
	}

	public function ratesFrom()
	{
		return $this->hasMany('App\Models\RateItem', 'city_from_id');
	}
}
