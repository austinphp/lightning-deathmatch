<?php


csvtojson('easytopics.csv', 'easytopics.json');
csvtojson('hardtopics.csv', 'hardtopics.json');



function csvtojson($filename, $jsonFileName){
	$easy = array_map('str_getcsv', file($filename));

	$temp = array();

	foreach($easy as $var)
	{
		$temp[] = $var[0];
	}

	file_put_contents($jsonFileName, json_encode($temp));
}

