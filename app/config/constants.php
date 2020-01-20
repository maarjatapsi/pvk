<?php
//Project name
define('PROJECT_NAME', 'pvk');
//APP Root Directory
define('APPROOT', dirname(dirname(__FILE__)) );
// URL Root
define('URLROOT', $_SERVER['HTTP_HOST'].'/'.PROJECT_NAME);
echo URLROOT;

// database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', PROJECT_NAME);

