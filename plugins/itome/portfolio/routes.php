<?php

use Itome\Portfolio\Models\Years;
use Itome\Portfolio\Models\Types;
use Itome\Portfolio\Models\Cards;



Route::get('import', function () {
	$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

	$spreadsheet = $reader->load('import.xlsx');

	$worksheet = $spreadsheet->getActiveSheet();
	// return $spreadsheet->getActiveSheet()
	// 	->rangeToArray(
	// 		'A2:K146',     // The worksheet range that we want to retrieve
	// 		NULL,        // Value that should be returned for empty cells
	// 		TRUE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
	// 		TRUE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
	// 		TRUE         // Should the array be indexed by cell row and cell column
	// 	);

	collect($spreadsheet->getActiveSheet()
		->rangeToArray(
			'A2:K17',     // The worksheet range that we want to retrieve
			NULL,        // Value that should be returned for empty cells
			TRUE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
			TRUE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
			TRUE         // Should the array be indexed by cell row and cell column
		))->each(function ($item) {
		$type = Types::where('name', $item['A'])->first();
		if (!$type) {
			$type = Types::create([
				'name' => $item['A']
			]);
			$type->save();
		}
		// $category = Category::where('name', $item['B'])->first();
		// if (!$category) {
		// 	$category = Category::create([
		// 		'name' => $item['B']
		// 	]);
		// 	$category->save();
		// }
		// $subcategory = null;
		// if ($item['C']) {
		// 	$subcategory = Category::where('name', $item['C'])->first();
		// 	if (!$subcategory) {
		// 		$subcategory = Category::create([
		// 			'name' => $item['C'],
		// 			'parent_id' => $category->id
		// 		]);
		// 		$subcategory->save();
		// 	}

		// }

		$item = Cards::create([
			'title' => $item['B'],
			'place' => $item['C'],
			'client' => $item['D'],
			'result' => $item['E'],
			'about' => $item['F'] . ' кг',
			'type_id' => $type->id,
			'year_id' => $year->id,
			'is_published' => true

		]);

		$item->save();
	});
});
