<?php

require 'vendor/autoload.php';

use ApiCache\JewelleryCache;
use ApiCache\mapsCache;

if(isset($_POST['apiType'])) {
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $apiType = $_POST['apiType'];
}

if($apiType == 'Jwellery') {
    $params = date('d/m/Y');
    $cache = new JewelleryCache();
    return $responseData = $cache->getResponse($params);
    
} else if ($apiType == 'Map') {
    $params = [$origin, $destination];
    $cache = new mapsCache();
    echo $responseData = $cache->getResponse($params);
}