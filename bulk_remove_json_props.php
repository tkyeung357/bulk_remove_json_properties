<?php 

$myJsonStr = file_get_contents('myJson.json');

$myJson = json_decode($myJsonStr, true);
$myJson = array_map(function($d){
    unset($d[0]['Timestamp']);
    return $d;
}, $myJson);

print_r(json_encode($myJson));

