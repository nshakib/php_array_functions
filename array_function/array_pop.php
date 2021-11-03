<?php 
//array_pop — Pop the element off the end of array

//Fickle mister $shifted is mad about losing his ‘websites’ key. 
// I’m not going to be in this $array if I can’t have my original key. Ok fine then, 
// we’ll array_pop() you right off the end of this $array one more time.

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

array_push ( $array, $shifted );

$shifted = array_pop($array);

print_r($array);
print_r($shifted);
?>