<?php

require_once '_Models/queryModel.php';
$query = new queryModel();
$result = $query->getBlog();
foreach($result as $d) {
            
            ?>
<div class="well">
            <strong><?php echo $d["title"];?></strong><?php
            echo "<br>";
            echo $d["body"];
            echo "<br>";
      echo '</div>';
        }
?>