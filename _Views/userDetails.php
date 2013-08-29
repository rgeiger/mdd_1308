<?php

require_once '_Models/queryModel.php';
$query = new queryModel();
$data = $query->getDetails();

foreach($data as $d){
	echo " <strong>Email:</strong>";
	echo $d["email"];
        echo "<br>";
	echo " <strong>Phone:</strong>";
	echo $d["phone"];
        echo "<br>";
	echo " <strong>Address</strong>";
	echo $d["address"];
	echo "<br>";	
}

?>

