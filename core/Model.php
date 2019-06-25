<?php
class Model {

    protected $db;

    public function __construct(){
        global $config;
        var_dump($config);
        $this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    }
}