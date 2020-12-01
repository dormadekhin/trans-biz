<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\RateItem;

class RateItemController extends CrudController
{

	public string $routeKey = 'rates';

	public string $modelClass = RateItem::class;
	public string $createView = 'Rate/Form';
	public string $editView = 'Rate/Form';

	public array $indexFields = [
		'id' => 'ID',
		'city_from.name' => 'Из города',
		'city_to.name' => 'В город',
		'weight_from' => 'Вес от',
		'weight_to' => 'Вес до',
		'volume_from' => 'Объем от',
		'volume_to' => 'Объем до',
		'price' => 'Цена',
	];

	public array $showFields = [
		'id' => 'ID',
		'city_from.name' => 'Из города',
		'city_to.name' => 'В город',
		'weight_from' => 'Вес от',
		'weight_to' => 'Вес до',
		'volume_from' => 'Объем от',
		'volume_to' => 'Объем до',
		'price' => 'Цена',
		'created_at' => 'Добавлен',
		'updated_at' => 'Изменен',
		'deleted_at' => 'Удален',
	];

	public array $createFields = [
		'city_from_id' => 1,
		'city_to_id' => null,
		'weight_from' => null,
		'weight_to' => null,
		'volume_from' => null,
		'volume_to' => null,
		'price' => null
	];

	public array $createRequestValidate = [
		'city_from_id' => ['required'],
		'city_to_id' => ['required'],
		'weight_from' => ['nullable', 'numeric'],
		'weight_to' => ['nullable', 'numeric'],
		'volume_from' => ['nullable', 'numeric'],
		'volume_to' => ['nullable', 'numeric'],
		'price' => ['required', 'numeric'],
	];

	public array $updateRequestValidate = [
		'city_from_id' => ['required'],
		'city_to_id' => ['required'],
		'weight_from' => ['nullable', 'numeric'],
		'weight_to' => ['nullable', 'numeric'],
		'volume_from' => ['nullable', 'numeric'],
		'volume_to' => ['nullable', 'numeric'],
		'price' => ['required', 'numeric'],
	];


	public function getIndexList(): object
	{
		return RateItem::withTrashed()->paginate();
	}

	public function getOtherFormData(): array
	{
		$cities = City::all();
		return [
			'cityFrom' => array_values($cities->where('from', true)->map(fn($item) => $item->only(['id', 'name']))->toArray()),
			'cityTo' => array_values($cities->where('to', true)->map(fn($item) => $item->only(['id', 'name']))->toArray()),
		];
	}

	public function getControllerTitle(): string
	{
		return 'Тарифы';
	}
}
