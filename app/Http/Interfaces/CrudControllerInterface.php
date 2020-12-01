<?php
namespace App\Http\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface CrudControllerInterface
{
	/**
	 * метод возвращающий список моделей для индексной страницы
	 * @return object
	 */
	public function getIndexList(): object;

	/**
	 * заголовок для индексной страницы
	 * @return string
	 */
	public function getControllerTitle(): string;

	/**
	 * возвращаем текущую модель по ID
	 * @param int $id
	 * @return Model|null
	 */
	public function getModel(int $id): ?Model;
}
