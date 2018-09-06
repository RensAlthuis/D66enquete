<?php

$val = $_POST['val'];

$mysqli = new mysqli("192.168.0.100", "d66user", "d66enquete", "d66");

$query = "SELECT * FROM entries";
$res = $mysqli->query($query);
$n=0;
$array = [];
while ($row = $res->fetch_assoc()) {
	$array[n] = [];
    	$array[n][0] = $row['id'];
	for($i = 1; $i <= 6; $i++){
		$array[n][$i] = $row['q'.$i];
	}
	$n++;
} 
echo json_encode($array);
?>
