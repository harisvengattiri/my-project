<?php

namespace ApiCache;

use Dotenv\Dotenv;
    
class Database
{
    
    public function __construct() {
        
        $this->loadEnvironmentVariables();
        $this->host = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->database = $_ENV['DB_DATABASE'];
        $this->connection();
    }
    
    private function loadEnvironmentVariables() {
        
        $dotenvFilePath = __DIR__;
        $dotenv = Dotenv::createImmutable($dotenvFilePath);
        $dotenv->load();
    }
    
    public function connection() {
        $this->db = new \mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->db->connect_errno) {
            throw new Exception('Failed to connect to the database: ' . $this->db->connect_error);
        }
        return $this->db;
    }
    
    public function get($key) {
        $query = "SELECT `cache_data` FROM `api_cache` WHERE `cache_key` = '$key'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $stmt->bind_result($data);
        $stmt->fetch();
        $stmt->close();

        if ($data) {
            return $data;
        }
    }
    
    public function set($key, $data) {
        $query = "INSERT INTO `api_cache` (`cache_key`, `cache_data`) VALUES ('$key', '$data')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}