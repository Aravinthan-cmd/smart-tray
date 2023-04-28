<?php 
require "conn.php";
date_default_timezone_set('Asia/Kolkata'); // set the timezone to Asia/Kolkata
$timestamp = date('Y-m-d H:i:s');
$id = $_GET['id'];
$sensor1 = $_GET['sensor1'];
$sensor2 = $_GET['sensor2'];
$sensor3 = $_GET['sensor3'];
$sample = $_GET['sample'];

echo $id;
echo $sensor1;
echo $sensor2;
echo $sensor3;
echo $status;

//$sql = "INSERT INTO newflow(id, level, lati, longi, date) VALUES('$id', '$level', '$lat', '$long', '$date')";

// $sql = "INSERT INTO newflow(id, level, lati, longi) VALUES('$id', '$level', '$lati', '$longi')";
$sql = "INSERT INTO sensor (id, sensor1, sensor2, sensor3, timestamp, sample) VALUES('$id', '$sensor1', '$sensor2', '$sensor3', '$timestamp' ,'$sample')";


$sql1 = "SELECT * from sensor ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql1);
$num = mysqli_fetch_array($result);
if ($conn->query($sql) === TRUE) {
    echo "STATUS: OK";
 
	echo $num['level'];
}
else{   
    echo "<h6>STATUS: failed</h6>";
}

?>

<!-- for mongodb -->
<?php
include_once 'conmongo.php';

$data = array(
     "id"=> $id,
     "sensor1"=> $sensor1,
     "sensor2"=> $sensor2,
     "sensor3"=> $sensor3,
     "sample"=> $sample,
     "timestamp"=> $timestamp 
    );

    $insert = $collection->insertOne($data);

    if ($insert) {
        echo '<br> MongoDB - STATUS: OK';
    }else{
        echo "<h6>MongoDB - STATUS: failed</h6>";
    }

 ?>

