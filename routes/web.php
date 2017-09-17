<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ReportsController@index');

Route::get('/report/{report}', 'ReportsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/test', function() {
// 	return parseText();
// });

// function parseText()
// {
// 	$path = storage_path() . '/test/parse.txt';

// 	$file = file_get_contents($path);

// 	$rows = explode("\n", $file);

// 	// remove empty lines
// 	array_filter($rows);

// 	$fields = [];
// 	$count = 0;

// 	foreach($rows as $row) {

// 		if ( substr($row, 0, 1) == '#') {
// 			$count++;
// 			$row = ltrim( str_replace('#', '', $row), ' '); // remove # and all preceding whitespace

// 			$fields[$count]['label'] = $row;
// 		} else {
// 			$fields[$count]['value'] = isset($fields[$count]['value']) ? "{$fields[$count]['value']} $row" : $row;
// 		}
// 	}

// 	foreach($fields as $field) {
// 		echo $field['label'] . ': ' . $field['value'] . '<br>';
// 	}
// }