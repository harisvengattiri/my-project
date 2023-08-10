<?php

namespace ApiCache;

class JewelleryCache extends Cache {
    
    public function getApiUrl($params) {
        
        $apiKey = '3462466c9963101d9f8cf4a4ff3469e6';
        $baseCurrency = 'XAU';
        $currencies = 'INR';
        $date = $params;
        $url = "https://api.metalpriceapi.com/v1/latest?api_key={$apiKey}&base={$baseCurrency}&currencies={$currencies}&date={$date}";
        return $url;
    }
    
    public function getApiParameters($url) {
        
        $queryString = parse_url($url, PHP_URL_QUERY);
        parse_str($queryString, $params);
        $parameters[] = $params['date'];
        
        return $parameters;
    }
    
    public function searchApiResponse($url, $key, $parameters) {
        foreach($parameters as $param) {
            $response = file_get_contents($url);
            if ($response === false) {
                die('Failed to retrieve metal price.');
            }
            $data = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE || empty($data['rates']['INR'])) {
                die('Invalid response from Metal Price API.');
            }
            $goldRateINRPerOunce = $data['rates']['INR'];
            $goldPriceINRPerGram = $goldRateINRPerOunce / 31.1035;
            $goldPriceINRPerGram = number_format((float)$goldPriceINRPerGram, 2, '.', '');
            $gold_rate = $goldPriceINRPerGram;
        
        $data = $gold_rate;
        return $data;
        }
    }
}
