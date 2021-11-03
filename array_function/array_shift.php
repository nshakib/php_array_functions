<?php 
//array_shift — Shift an element off the beginning of array


//Let’s remember our original $array which had two keys in it, ‘websites’ and ‘friends’.
// I want each key to have it’s own variable name in the program, how can I do that? Well,
// let’s apply the array_shift() function to $array, return the result to a variable $shifted, and examine both variables.

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

$shifted = array_shift($array);
print_r($array);
print_r($shifted);

?>