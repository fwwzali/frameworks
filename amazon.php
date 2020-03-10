<?php 

$input = array(0,1,0,2,1,0,1,3,2,1,2,1);

$volume = 0;
$temp_volume = 0;

$max_depth = max($input);
$current_level = 0;

//echo $max_depth;

foreach ($input as $key => $value) {
	if ($current_level < $value) {
		$current_level = $value;
		$volume += $temp_volume;
		//echo $temp_volume.'<br>';
		$temp_volume = 0;
		//echo $volume.'<br>';

	}
	else{
		$temp_volume += ($current_level-$value);
		//echo $temp_volume.'<br>';
	}
}

//echo $volume.'<br>';
//echo $temp_volume.'<br>';

for($i = 0; $i < count($input): $i++){
	
	$current_level = $input[$i];

	for($j = $i+1; $j < count($input): $j++){
		
		if ($current_level < $input[$j]) {
			$current_level = $input[$j];
			$volume += $temp_volume;
			//echo $temp_volume.'<br>';
			$temp_volume = 0;
			//echo $volume.'<br>';
		}
	}

}