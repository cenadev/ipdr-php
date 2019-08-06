<?php
require 'environment.php';

define("BASE_URL", "http://localhost/ipdr-php");

global $config;
$config = array();

if (ENVIRONMENT == "dev") {
    $config['dbname'] = 'db_ipdr';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
} else {
    
    $config['dbname'] = 'cenade29_ipdr';
    $config['host'] = '162.241.2.188';
    $config['dbuser'] = 'cenade29_cleison';
    $config['dbpass'] = 'senha.css';
}