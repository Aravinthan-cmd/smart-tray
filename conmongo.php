<?php

//mongodb 
require 'vendor/autoload.php';
//Creating Connection
$conmongo = new MongoDB\Client("mongodb://localhost:27017");

$db = $conmongo->smart;
$collection = $db->smartemp;

?>
