<?php

use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/test', function() {
	return response()->json([
		'user' => [
			'first_name' => 'Nathan',
			'last_name' => 'Scherneck'
			]
		]);
});
