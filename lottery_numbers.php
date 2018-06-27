<?php 
	// array of numbers from 1 to 50
	$numbers = range(1,50);	
	// randomly pick 5 numbers from array
	$rand_nums = array_rand($numbers,5);
	// shuffle array into random order
	shuffle($rand_nums);

	echo "The numbers selected are ". "<br>";
	// loop through the numbers and print each number seperated by a comma
	for($i=0;$i < count($rand_nums);$i++){
		$sep = "";
		if($i < count($rand_nums)-1){
			$sep = ", ";
		}
		else{
			$sep = "";
		}
		echo $rand_nums[$i] . $sep;
	}
?>	
