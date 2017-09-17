<?php

namespace App\Iman;

/**
* 
*/
class MessageParser
{
	
	public function parse($text='')
	{
		// $path = storage_path() . '/test/parse.txt';

		// $file = file_get_contents($path);

		$rows = explode("\n", $text);

		// remove empty lines
		// array_filter($rows);
		$fields = [];
		$count = 0;

		foreach($rows as $row) {

			if ( substr($row, 0, 1) == '#') {
				$count++;
				$row = ltrim( str_replace('#', '', $row), ' '); // remove # and all preceding whitespace

				$fields[$count]['label'] = $row;
			} else {

				// if ($row == '') $row = '<br>';

				$fields[$count]['value'] = isset($fields[$count]['value']) ? "{$fields[$count]['value']} $row" : $row;
			}
		}

		if (!empty($fields[1]['label']) && !empty($fields[1]['value'])) {
			return $fields;
		}

		return false;
	}
}