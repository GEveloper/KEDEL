<?php

// do not display errors
error_reporting(0);
ini_set('display_errors', 0);

session_start();

// deny loading in <iframe>
header( 'X-Frame-Options: DENY' );

// set HttpOnly flag to session cookie
ini_set( 'session.cookie_httponly', 1 );

// prepare database configuration
$DB = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'kedel',
];

// include required files
require_once 'database.php';

// connect to the database
$db = new DB($DB['host'], $DB['user'], $DB['pass'], $DB['name']);
