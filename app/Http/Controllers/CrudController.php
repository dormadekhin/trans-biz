<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\CrudControllerInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

abstract class CrudController extends BaseController implements CrudControllerInterface
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public string $routeKey;
	public string $modelClass;

	public array $indexFields = [];
	public array $showFields = [];
	public array $createFields = [];

	public array $createRequestValidate = [];
	public array $updateRequestValidate = [];

	public string $indexView = 'Common/Index';
	public string $showView = 'Common/Show';

	public string $editView;
	public string $createView;

	protected ?Model $_model;

	public function index()
	{
		return Inertia::render($this->indexView, [
			'filters' => Request::all(['search', 'trashed']),
			'list' => $this->getIndexList(),
			'fields' => $this->indexFields,
			'baseRoute' => [
				'route' => $this->routeKey,
				'title' => $this->getControllerTitle(),
			],
		]);
	}

	public function show($id)
	{
		return Inertia::render($this->showView, [
			'item' => $this->getModel($id),
			'fields' => $this->showFields,
			'baseRoute' => [
				'route' => $this->routeKey,
				'title' => $this->getControllerTitle(),
			],
		]);
	}

	public function create()
	{
		return Inertia::render($this->createView, [
			'item' => $this->createFields,
			'formData' => $this->getOtherFormData(),
			'baseRoute' => [
				'route' => $this->routeKey,
				'title' => $this->getControllerTitle(),
				'action' => 'store',
			],
		]);
	}

	public function store()
	{
		($this->modelClass)::create(Request::validate($this->createRequestValidate));
		return Redirect::route($this->routeKey)->with('success', 'Запись добавлена');
	}

	public function edit($id)
	{
		return Inertia::render($this->editView, [
			'item' => $this->getModel($id),
			'formData' => $this->getOtherFormData(),
			'baseRoute' => [
				'route' => $this->routeKey,
				'title' => $this->getControllerTitle(),
				'action' => 'update',
			],
		]);
	}

	public function update($id)
	{
		$model = $this->getModel($id);
		$model->update(Request::validate($this->updateRequestValidate));
		return Redirect::route($this->routeKey.'.show', ['id' => $model->id])
			->with('success', 'Запись обновлена.');
	}

	public function destroy($id)
	{
		$this->getModel($id)->delete();
		return Redirect::route($this->routeKey)->with('success', 'Запись удалена.');
	}

	public function restore($id)
	{
		($this->modelClass)::withTrashed()
			->findOrFail($id)
			->restore();
		return Redirect::back()->with('success', 'Запись восстановлена.');
	}

	public function getOtherFormData(): array
	{
		return [];
	}

	public function getModel(int $id): ?Model
	{
		return ($this->modelClass)::findOrFail($id);
	}

}
