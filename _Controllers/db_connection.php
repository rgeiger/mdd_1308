<?php  

class DB{
		
	public function __construct(){
		
		try {
			$dsn = "mysql:host=localhost;port=3306;dbname=creatjn2_leadingLightStar";
			$db_user = "creatjn2_rgeiger";
			$db_pass = "TfTOpd(lG7pK";
			
			$this->db = new \PDO($dsn, $db_user, $db_pass);
		}
		catch (PDOException $error) {
			var_dump($error);
		}
	}	
}
?>