<?php

namespace ApiCache;

class Cache {
    
    private $database;

    public function __construct() {
        $this->database = new Database();
    }
    
    public function getApiUrl($params) {
        
    }
    
    public function getApiParameters($url) {
        
    }
    
    public function getApiParameterValues($parameters) {
        $query = parse_url($parameters, PHP_URL_QUERY);
        parse_str($query, $params);
        return $params;
    }
    
    public function getResponse($params) {
        
        $url = $this->getApiUrl($params);
        
        $parameters = $this->getApiParameters($url);

        $key = $this->generateKey($url.$parameters);
        
        $cachedData = $this->get($key);
        
        if ($cachedData !== false) {
            return $cachedData;
        } else {
            return $this->getCustomResponse($url, $key, $parameters);
        }
    }

    public function getCustomResponse($url, $key, $parameters) {
        $responseData = $this->searchApiResponse($url, $key, $parameters);
        $this->set($key, $responseData);
        return $responseData;
    }
    
    public function searchApiResponse($url, $key, $parameters) {
        
    }
    
    public function generateKey($url) {
        $key = hash('sha256', $url);
        return $key;
    }

    public function get($key) {
        
        $data = $this->database->get($key);

        if ($data) { return $data; }
        return false;
    }

    public function set($key, $data) {
        
        $this->database->set($key, $data);
    }
}
