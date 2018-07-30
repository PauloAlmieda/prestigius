<?php
require 'environment.php';

define("BASE_URL", "http://localhost/prestigius/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'prestigius';
	$config['host'] = '127.0.0.1';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'classificados';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>

