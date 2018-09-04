<?php

$val = $_POST['val'];

$mysqli = new mysqli("192.168.0.100", "d66user", "d66enquete", "d66");

$query = "INSERT INTO entries(q1,q2,q3,q4,q5,q6) VALUES(";
$query = $query . $val[0] . ',';
$query = $query . $val[1] . ',';
$query = $query . $val[2] . ',';
$query = $query . $val[3] . ',';
$query = $query . $val[4] . ',';
$query = $query . $val[5] . ')';
if (!$mysqli->query($query)){
    	echo "couldn't insert values: (" . $mysqli->errno . ") " . $mysqli->error;
}else{
	echo "ok";
}

//$query = "SELECT * FROM entries";
//$res = $mysqli->query($query);
//$n=0;
//$array = [];
//while ($row = $res->fetch_assoc()) {
	//$array[n] = [];
    	//$array[n][0] = $row['id'];
	//for($i = 1; $i <= 6; $i++){
		//$array[n][$i] = $row['q'.$i];
	//}
	//$n++;
//} 
//echo json_encode($array);
?>
