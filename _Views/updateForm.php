<?php
    foreach($data as $d) {        
    ?>
	<form action="?action=updateaction&id=<?=$d["id"]?>" method="post">
		<strong>Email: </strong><input type="text" name="email" value="<?-$d["email"]?>" />
		<br>
                <strong>Phone: <input type="text" name="phone" value="<?-$d["phone"]?>" />
                    <br>
		<strong>Address: <input type="text" name="address" value="<?-$d["address"]?>" />                
                    <br>
		<input type="Submit" value="update" />
	</form>
    <?php } ?>