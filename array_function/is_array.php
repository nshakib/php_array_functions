
<?php
# Checks whether the variable is an array. Returns TRUE if the variable is an array, 
//and FALSE otherwise. Used like so:

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
    $result = is_array($array);
    if($result==1){
        echo "True";
    }else{
        echo "false";
    }
    echo is_array($result);
?>