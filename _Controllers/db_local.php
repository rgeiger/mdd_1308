<?php 
	
function connect()
{
	try {
		$dsn = "mysql:host=localhost;
			port=3306;
			dbname=leadingLightStar";
		$db_user = "root";
		$db_pass = "root";
		
		$conn = new \PDO($dsn, $db_user, $db_pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec('SET NAMES "utf8"');
	}
	catch (PDOException $e) {
		$output = 'Unable to connect to the database server.';
  		include 'output.html.php';
  		exit();
	}
	$output = 'Database connection established.';
}
?>