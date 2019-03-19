<?php 
//read json from file
$myJsonStr = file_get_contents('myJson.json');

//convert to array
$myJson = json_decode($myJsonStr, true);

$myJson = array_map(function($d){
    //remove preperty
    unset($d[0]['Timestamp']);
    return $d;
}, $myJson);

print_r(json_encode($myJson));

//save result to yourJson.json
file_put_contents('yourJson.json', json_encode($myJson));

