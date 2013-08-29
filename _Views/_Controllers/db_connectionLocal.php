<?php  

class DB{
		
	public function __construct(){
		
		try {
			$dsn = "mysql:host=localhost;port=3306;dbname=leadingLightStar";
			$db_user = "root";
			$db_pass = "root";
			
			$this->db = new PDO($dsn, $db_user, $db_pass);
		}
		catch (PDOException $error) {
			var_dump($error);
		}
	}	
}
?>