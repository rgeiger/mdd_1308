<?php
	class UsernameModel {
	private $db;
	public function __construct($dsn, $user, $pass) {
		try {
			 $this->db = new \PDO($dsn, $user, $pass);
		}
		catch (\PDOException $e) {
			var_dump($e);
		}
	} //constuct
	public function getUsername() {
			$statement = $this->db->prepare("
			SELECT first_name
			FROM characters
			");
			try {
				if ($statement->execute()) {
				$rows = $statement->fetchALL(\PDO::FETCH_ASSOC);
				return $rows;
				} //if execute block
			}
			catch (\PDOException $e) {
			echo "couldn't query";
			}
			return array();
		}//getUsername
	}//class UsernameModel
?>