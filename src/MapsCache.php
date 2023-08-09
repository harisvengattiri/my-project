<?php

namespace ApiCache;

class mapsCache extends Cache {
    
    public function getApiUrl($params) {
        
        $origin = $params[0];
        $destination = $params[1];
        $base_url = 'https://nominatim.openstreetmap.org/search?origin='.$origin.'&destination='.$destination;
        
        return $base_url;
    }
    
    public function getApiParameters($url) {
        
        $queryString = parse_url($url, PHP_URL_QUERY);
        parse_str($queryString, $params);
        $parameters[] = $params['origin'];
        $parameters[] = $params['destination'];
        
        return $parameters;
    }
    
    public function searchApiResponse($url, $key, $parameters) {
        foreach($parameters as $param) {
            
            $data[] = $this->geocode($param);
        }
        $latLonValues = array();
        foreach ($data as $place) {
            $latLonValues[] = $place['lat'] . ',' . $place['lon'];
        }
        
        $commaSeparatedValues = implode(', ', $latLonValues);
        $valuesArray = explode(',', $commaSeparatedValues);
            $lat1 = $valuesArray[0];
            $lon1 = $valuesArray[1];
            $lat2 = $valuesArray[2];
            $lon2 = $valuesArray[3];
            $distance = $this->calculateDistance($lat1, $lon1, $lat2, $lon2);
            $distance = number_format($distance, 2).'Km';
        return $distance;
    }
    
    
    
    public function geocode($place) {
        
        $base_url = 'https://nominatim.openstreetmap.org/search';
        $params = array(
            'q' => urlencode($place),
            'format' => 'json'
        );
        $url = $base_url . '?' . http_build_query($params);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'myMaps');
        $response = curl_exec($ch);
        curl_close($ch);
    
        $data = json_decode($response, true);
    
        if ($data && count($data) > 0) {
            return array(
                'lat' => floatval($data[0]['lat']),
                'lon' => floatval($data[0]['lon'])
            );
        } else {
            return null;
        }
    }
    
    public function calculateDistance($lat1, $lon1, $lat2, $lon2) {
        $R = 6371; // Earth's radius in km
    
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
    
        $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    
        $distance = $R * $c;
        return $distance;
    }
}
