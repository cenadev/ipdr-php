<?php
require 'environment.php';

define("BASE_URL", "http://localhost/ipdr-php");

global $config;
$config = array();

if (ENVIRONMENT == "dev") {
    $config['dbname'] = 'ipdr';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
} else {
    $config['dbname'] = 'ipdr';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}