<?php 
//array_push — Push one or more elements onto the end of array

//Our newly created $shifted variable is mad. 
// It wants back into the original $array variable to undo the shifting we have caused. Well, 
// let’s try to apply the array_push() function to the original $array and push $shifted back onto the end of the array:

    $array = array (
		'websites' => array (
				'Search' => 'Google',
				'Social' => 'Facebook',
				'News' => 'NY Times' 
		),
		'friends' => array (
				'Chris',
				'Jim',
				'Lynn',
				'Jeff',
				'Joanna' 
		) 
);

$shifted = array_shift ( $array );

array_push($array, $shifted);
print_r($array);
?>