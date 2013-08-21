<?php
	class UserProfileModel {
	private $db;
	public function __construct($dsn, $user, $pass) {
		try {
			 $this->db = new \PDO($dsn, $user, $pass);
		}
		catch (\PDOException $e) {
			var_dump($e);
		}
	} //constuct
	public function getUserProfile() {
			$statement = $this->db->prepare("
			SELECT *
			FROM profile
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