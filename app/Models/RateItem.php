<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class RateItem extends Model
{
	use HasFactory, SoftDeletes;

	protected $with = ['cityFrom', 'cityTo'];

	protected $casts = [
		'created_at' => 'datetime:d.m.Y h:i:s',
		'updated_at' => 'datetime:d.m.Y h:i:s',
		'deleted_at' => 'datetime:d.m.Y h:i:s',
	];

	public function cityFrom()
	{
		return $this->belongsTo('App\Models\City', 'city_from_id');
	}

	public function cityTo()
	{
		return $this->belongsTo('App\Models\City', 'city_to_id');
	}
}
