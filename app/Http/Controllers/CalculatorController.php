<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\RateItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Post(
 * path="/api/calculate",
 * summary="Рассчет стоимости доставки",
 * description="Рассчет стоимости доставки по переданным параметрам",
 * operationId="calculate",
 * tags={"calculate"},
 * @OA\RequestBody(
 *    required=true,
 *    description="Передайте параметры для рассчета",
 *    @OA\JsonContent(
 *       required={"cityTo","weight","volume"},
 *       @OA\Property(property="cityFrom", type="string", example="Новосибирск"),
 *       @OA\Property(property="cityTo", type="string", example="Новокузнецк"),
 *       @OA\Property(property="weight", type="number", format="float", example="25"),
 *       @OA\Property(property="volume", type="number", format="float", example="0.2"),
 *    ),
 * ),
 * @OA\Response(
 *    response=422,
 *    description="Некорректный запрос для рассчета стоимости",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Некорректные данные для рассчета."),
 *       @OA\Property(property="errors", type="array",
 *                      @OA\Items(
 *                          type="string",
 *                      ),
 *                          example={"Неверное значение cityFrom.","Вес должен быть числом."},
 *     ),
 * ),
 *     ),
 * @OA\Response(
 *    response=200,
 *    description="Рассчет стоимости произведен",
 *    @OA\JsonContent(
 *       @OA\Property(property="cost", type="number", format="float", example="8022"),
 *       @OA\Property(property="method", type="string", example="weigh|volume"),
 *        )
 *     ),
 * )
 */
class CalculatorController extends Controller
{
	public function index(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'cityFrom' => ['nullable', 'exists:cities,name'],
			'cityTo' => ['required', 'exists:cities,name'],
			'weight' => ['required_without:volume', 'numeric'],
			'volume' => ['required_without:weight', 'numeric'],
		]);

		if ($validator->fails()) {
			return response()->json([
				'message' => 'Некорректный запрос для рассчета стоимости',
				'errors' => $validator->errors()->all(),
			], 422);
		}
		$from = $request->has('cityFrom') ? City::where('name', $request->input('cityFrom'))->first() : City::find(City::CITY_NSK);
		$to = City::where('name', $request->input('cityTo'))->first();

		//проверяем что есть запрашиваемое направление доставки
		if (!RateItem::where([
			['city_from_id', $from->id],
			['city_to_id', $to->id],
		])->count()) {
			return response()->json([
				'message' => 'Некорректный запрос для рассчета стоимости',
				'errors' => ['Нет указанного направления для доставки'],
			], 422);
		}

		$weight = round($request->input('weight'), 2);
		$volume = round($request->input('volume'), 2);

		$weightPrice = $volumePrice = 0;
		if ($weight) {
			$rate = RateItem::where([
				['city_from_id', $from->id],
				['city_to_id', $to->id],
				['weight_from', '<=', $weight],
				['weight_to', '>=', $weight],
			])->orderBy('weight_from')
				->first();
			$weightPrice = data_get($rate, 'price', 0);
		}

		if ($volume) {
			$rate = RateItem::where([
				['city_from_id', $from->id],
				['city_to_id', $to->id],
				['volume_from', '<=', $volume],
				['volume_to', '>=', $volume],
			])->orderBy('volume_from')
				->first();
			$volumePrice = data_get($rate, 'price', 0);
		}

		if ($volumePrice > $weightPrice) {
			return response()->json([
				'price' => $volumePrice,
				'method' => 'volume',
			]);
		}

		return response()->json([
			'price' => $weightPrice,
			'method' => 'weight',
		]);
	}
}
