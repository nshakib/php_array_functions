<?php 
    //array_keys — Return all the keys or a subset of the keys of an array
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
    
    $merge = array_merge($array['websites'], $array['friends']);

    //array_keys
    $key = array_keys($merge);
    print_r($key);
?>