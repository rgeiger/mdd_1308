<?php

require_once '_Models/queryModel.php';
$query = new queryModel();
$result = $query->getAll();
foreach($result as $d) {
            
            echo '<div class="well">';
            
            echo $d["first_name"];
            echo " ";
            echo $d["last_name"];
            echo "<br>";
            echo " <a href=?action=details&id=".$d["id"]." class='btn btn-primary'>details</a>";
            echo "<br><br>";
            
            echo '</div>';  
        }
?>