<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class CityController extends CrudController
{
	public string $routeKey = 'cities';

	public string $modelClass = City::class;
	public string $createView = 'City/Form';
	public string $editView = 'City/Form';

	public array $indexFields = [
		'id' => 'ID',
		'name' => 'Название',
		'from' => 'Доставка из',
		'to' => 'Доставка до',
	];

	public array $showFields = [
		'id' => 'ID',
		'name' => 'Название',
		'from' => 'Доставка из',
		'to' => 'Доставка до',
		'created_at' => 'Добавлен',
		'updated_at' => 'Изменен',
		'deleted_at' => 'Удален',
	];

	public array $createFields = [
		'name' => '',
		'from' => false,
		'to' => true,
	];

	public array $createRequestValidate = [
		'name' => ['required', 'max:100'],
		'email' => ['nullable', 'max:50', 'email'],
		'phone' => ['nullable', 'max:50'],
		'address' => ['nullable', 'max:150'],
		'city' => ['nullable', 'max:50'],
		'region' => ['nullable', 'max:50'],
		'country' => ['nullable', 'max:2'],
		'postal_code' => ['nullable', 'max:25'],
	];

	public array $updateRequestValidate = [
		'name' => ['required', 'max:100'],
		'from' => ['required', 'boolean'],
		'to' => ['required', 'boolean'],
	];


	public function getIndexList(): object
	{
		return City::filter(Request::only('search'))
			->orderBy('name')
			->withTrashed()
			->paginate();
	}

	public function getControllerTitle(): string
	{
		return 'Города';
	}
}
