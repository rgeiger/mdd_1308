<?php


foreach($data as $d){
	
	echo $d["first_name"];
	echo " ";
	echo $d["last_name"];
	echo " <a href=?action=details&id=".$d["id"]." class='btn'>details</a>";
	echo "<br>";
}

	
	
	
?>