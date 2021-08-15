<?php

namespace App\Actions\My;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ImportXlsAction
{
	public static function import(UploadedFile $file)
	{
		$spreadsheet = IOFactory::load($file->getPathname());
		$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
		$data = $weightMap = $volumeMap = [];
		$cities = array_flip(array_map('mb_strtolower', \App\Models\City::all()->pluck('name', 'id')->toArray()));
		$strToNumber = function ($val) {
			if (!is_string($val)) {
				return (float)$val;
			}
			$val = str_replace(',', '.', $val);
			preg_match('/\d+\.*\d*/', $val, $match);
			return (float)($match[0] ?? $val);
		};
		//маппинг веса и номера колонки
		foreach ($sheetData[1] as $col => $val) {
			if ($col < 'C' || !isset($val)) {
				continue;
			}
			$weightMap[$col] = ['from' => $strToNumber($val), 'to' => $strToNumber($sheetData[2][$col] ?? null)];
		}

		//маппинг объема и номера колонки
		foreach ($sheetData[3] as $col => $val) {
			if ($col < 'C' || !isset($val)) {
				continue;
			}
			$volumeMap[$col] = ['from' => $strToNumber($val), 'to' => $strToNumber($sheetData[4][$col] ?? null)];
		}
		$now = Carbon::now();

		foreach ($sheetData as $rowK => $row) {
			if ($rowK < 5 || (!$cityName = str_replace('*', '', $row['A']))) {
				continue;
			}
			if (!$cityId = data_get($cities, mb_strtolower($cityName))) {
				$newCity = new \App\Models\City([
					'name' => $cityName,
					'to' => true,
				]);
				$newCity->save();
				$cities[mb_strtolower($newCity->name)] = $newCity->id;
				$cityId = $newCity->id;
			}
			foreach ($row as $col => $val) {
				if ($col < 'C' || !($price = $strToNumber($val))) {
					continue;
				}
				$data[] = [
					'city_from_id' => \App\Models\City::CITY_NSK,
					'city_to_id' => $cityId,
					'weight_from' => $weightMap[$col]['from'] ?? null,
					'weight_to' => $weightMap[$col]['to'] ?? null,
					'volume_from' => $volumeMap[$col]['from'] ?? null,
					'volume_to' => $volumeMap[$col]['to'] ?? null,
					'price' => $price,
					'created_at' => $now,
				];
			}
		}
		if ($data) {
			DB::table('rate_items')->truncate();
			DB::table('rate_items')->insert($data);
			return true;
		}
		return false;
	}
}
