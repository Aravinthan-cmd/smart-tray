<?php 
require "conn.php";
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); 
header('Access-Control-Allow-Headers: Content-Type, Authorization');
$sql = "SELECT * FROM sensor ORDER BY timestamp DESC LIMIT 1";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($query); 
$sensors = [
    'sensor1' => $row['sensor1'],
    'sensor2' => $row['sensor2'],
    'sensor3' => $row['sensor3'],
    'sample' => $row['sample']
];

echo json_encode($sensors);
?>  
