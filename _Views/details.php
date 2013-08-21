<?php

foreach($data as $d){
    ?><ul class="unstyled">
            
        <li>
            <?php echo " <strong>Email: </strong>";
            echo $d["email"] ?>
        </li>
	<li>
            <?php echo " <strong>Phone: </strong>";
            echo $d["phone"]; ?>
        </li>
	<li>
            <?php echo " <strong>Address </strong>";
            echo $d["address"];
            echo "<br>"; ?>
     </ul>
<?
}
?>