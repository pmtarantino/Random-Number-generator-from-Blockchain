<?php
function RandomBC($digits = 10) {
	
	$url_json = 'https://blockchain.info/unconfirmed-transactions?format=json';
	# Using Blockchain.info, check request limits
	# https://blockchain.info/api

	$url_contents = file_get_contents($url_json);

	$json = json_decode($url_contents);
	$input_script = $json->txs[0]->inputs[0]->script;
	$only_numbers = preg_replace("/[^0-9]/", "", $input_script); # Leave only numbers
	$numbers_len = strlen($only_numbers);

	$str_origin = round($numbers_len/2 - $digits/2);
	return substr($only_numbers,$str_origin,$digits);
}
