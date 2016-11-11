<?php


if(!isset($argv[1])){
	echo('pass in a difficulty level: easy or hard');
}
else{
	if($argv[1] === 'easy')
	{
		echo getTopic('easytopics.json');
	}
	elseif($argv[1] === 'hard')
	{
		echo getTopic('hardtopics.json');
	}
}



function getTopic($filename){
	$file = file_get_contents($filename);
	$json = json_decode($file);
	$maxSize = count($json);
	$position = rand(0, $maxSize);
	// var_dump(trim($json[$position]));
	return "Your Question is: \n" . $json[$position] . "\n";
}