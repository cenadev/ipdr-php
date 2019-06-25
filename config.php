<?php
require 'environment.php';

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