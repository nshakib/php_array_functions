<?PHP 

//Remember we had some websites and friends in the array from the prior example. In fact we stored an array of 
# values in those arrays. Well I’m feeling lazy and I don’t want to work with two arrays. 
# I just want to work with one, so let’s merge those two arrays together!
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
print_r($merge);
?>