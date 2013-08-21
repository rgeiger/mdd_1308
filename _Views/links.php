<?php


foreach($data as $d){
	
	echo $d["first_name"];
	echo " ";
	echo $d["last_name"];
        echo "<br>";
	echo " <a href=?action=details&id=".$d["id"]." class='btn'>details</a>";
        echo " <a href=?action=update&id=".$d["id"]." class='btn alert-success'>update</a>";
        echo " <a href=?action=delete&id=".$d["id"]." class='btn alert-danger'>delete</a>";
	echo "<br><br>";
}

	
	
	
?>