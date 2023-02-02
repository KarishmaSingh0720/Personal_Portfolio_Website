<?php

session_start();

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','db_portfolio');
define('SITE_URL','http://localhost/Personal_Portfolio_Website/index.php');

include_once('controller/DatabaseConnection.php');
$db = new DatabaseConnection();
