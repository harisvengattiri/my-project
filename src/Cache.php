<?php

namespace ApiCache;

class Cache {
    
    private $database;

    public function __construct() {
        $this->database = new Database();
    }
    
    public function getApiUrl() {}
    
    public function getApiParameters($params) {}
    
    public function getResponse($params) {
        $url = $this->getApiUrl();
        $parameters = $this->getApiParameters($params);
        $key = $this->generateKey($url.$parameters);
        $cachedData = $this->get($key);
        if ($cachedData !== false) {
            return $cachedData;
        } else {
            $responseData = $this->getApiResponse($url, $parameters);
            $this->set($key, $responseData);
            return $responseData;
        }
    }
    
    public function getApiResponse($url, $parameters) {}
    
    public function generateKey($url) {
        $key = hash('sha256', $url);
        return $key;
    }

    public function get($key) {
        $data = $this->database->get($key);
        if(!$data) {return false; }
        else if ($data) { return $data; }
    }

    public function set($key, $data) {
        $this->database->set($key, $data);
    }
}
