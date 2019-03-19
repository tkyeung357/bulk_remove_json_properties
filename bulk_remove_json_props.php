<?php 
$scope = $argv[1];
$property = $argv[2];
$input = $argv[3];
$output = $argv[4];

$myJsonStr = file_get_contents("{$input}.json");

$myJson = json_decode($myJsonStr, true);

//support 1 dimension for now
if (array_key_exists($scope, $myJson)) {
    //scope found
    $myJson[$scope] = array_map(function($d){
        //remove property
        unset($d['Timestamp']);
        return $d;
    }, $myJson[$scope]);

    print_r(json_encode($myJson));

    file_put_contents("{$input}.json", json_encode($myJson));
}
