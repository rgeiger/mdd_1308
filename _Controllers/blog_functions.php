<?php
	require_once('../_Controllers/db_local.php');
	require_once('../_Controllers/output_functions.php');
        require_once('../_View/viewModel');
	
	function redirect_to($new_location) {
    	header("Location: " . $new_location);
    	exit;
	}
	function query($query, $bindings, $conn)
	{
		$stmt = $conn->prepare($query);
		$stmt->execute($bindings);
		
		$results = $stmt->fetchAll();
		
		return $results ? $results : false;
	}
	

        function view($path, $data = null) 
        {
	if ( $data ) {
		extract($data);
            }

            $path .= '.view.php';

            
        }

	
?>