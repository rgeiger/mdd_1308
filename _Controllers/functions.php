<?php
	require_once('db_local.php');
	require_once('output_functions.php');
	
	function redirect_to($new_location) {
    	header("Location: " . $new_location);
    	exit;
	}
	
        function view($path, $data = null) 
        {
	if ( $data ) {
		extract($data);
            }

            $path .= '.view.php';

            
        }

	
?>