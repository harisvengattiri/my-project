<?php

require 'vendor/autoload.php';

use ApiCache\JewelleryCache;
use ApiCache\MapsCache;

if(isset($_POST['apiType'])) {
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $apiType = $_POST['apiType'];
}

if($apiType == 'Jewellery') {
    $params = date('d/m/Y');
    $cache = new JewelleryCache();
    return $responseData = $cache->getResponse($params);
    
} else if ($apiType == 'Map') {
    $params = [$origin, $destination];
    $cache = new MapsCache();
    echo $responseData = $cache->getResponse($params);
}
