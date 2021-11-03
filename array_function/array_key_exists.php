<?php 
    //With array_key_exists() we can perform a validation similar to the way we would with isset(). 
    // You pass a key to search for and an array to search in, and the function will return TRUE if 
    //the key exists in the array provided. Building on our prior example, let’s see if the 7th key is set:
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

        //array_key_exits
        $exits = array_key_exists('7',$key);
        print_r($exits); //1 or TRUE
        print "\n";
        echo $key['7'];//The key of 7 has value of 4
?>