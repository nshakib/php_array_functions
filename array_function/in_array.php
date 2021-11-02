<?php 
# We may often want to check if a certain value is in one of our arrays. Recall from our example above that we assigned 
# an indexed array of friends to the ‘friends’ key of our example array. Let’s see if ‘Jeff’ was included.

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
$result = in_array('jeff',$array['friends']);
print_r($result);
?>