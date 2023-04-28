<?php

// required headersheader('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); 
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// include database file
include_once 'conmongo.php';

$record = $collection->find(
    [],
    [
        'sort' => ['timestamp' => -1],
        'limit' => 1
    ]
  );
  
  foreach ($record as $value) {
      $data [] = $value;
     }

$json = json_encode($data);
echo $json;

?>