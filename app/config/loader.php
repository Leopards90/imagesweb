<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
	'Train\Controllers' => __DIR__ . '/../controllers/',
	'Train\Models'      => __DIR__ . '/../models/',
	'Train\Forms'		=> __DIR__ . '/../forms/',
	'Train\Libs'		=> __DIR__ . '/../libs/',
	'Train\Controllers\Admin' 	=> __DIR__ . '/../admin/controllers/',
))->register();

// Use composer autoloader to load vendor classes
//require_once __DIR__ . '/../../vendor/autoload.php';