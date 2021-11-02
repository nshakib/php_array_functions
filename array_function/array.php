

<?php
# <!-- This handy little guy creates an array for you. Here we’ll create an associative array with two keys,
# and then place an an associative array inside one and an indexed array inside the other. -->

 $array = array(
     'website' => array(
         'search' => 'Google',
         'social' => 'Facebook',
         'News' => 'NY Times',
     ),
     'friends' => array(
        'Chris',
				'Jim',
				'Lynn',
				'Jeff',
				'Joanna'
     )
 );

 print_r($array);
?>