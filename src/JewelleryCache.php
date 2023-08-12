<?php

namespace ApiCache;

class JewelleryCache extends Cache {
    
    public function getApiUrl() {
        $url = "https://api.metalpriceapi.com/v1/latest?api_key={'3462466c9963101d9f8cf4a4ff3469e6'}&base={'XAU'}&currencies={'INR'}";
        return $url;
    }
    
    public function getApiParameters($params) {
        $parameters[] = $params;
        return $parameters;
    }
    
    public function getApiResponse($url, $parameters) {
        $response = file_get_contents($url);
        return $response;
    }
}
