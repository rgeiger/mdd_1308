<?php
//include "db_connection.php";

if(!class_exists('DB')){ include '_Controllers/db_connection.php'; }

if(!class_exists('queryModel')){
        
        class queryModel extends DB{
	
	public function __constract(){
	}
	
	public function getAll(){
		
		$sql = "select * from characters";
		$st = $this->db->prepare($sql);
		$st->execute();
		
		return $st->fetchAll();
	}
	
	public function getOne($id=0){
		
		$sql = "select * from profile where id = :id";
		$st = $this->db->prepare($sql);
		$st->execute(array(":id"=>$id));
		
		return $st->fetchAll();		
	}        
        public function checkLogin($uname="",$password=""){
		$sql = "select * from characters where un=:uname and pass=:password";
		$st = $this->db->prepare($sql);
		$st->execute(array(":uname"=>$uname,":password"=>$password));
		
		$num = $st->rowCount();
		
		if($num>0){
			$_SESSION["loggedin"] = 1;			
		}else{
			$_SESSION["loggedin"] = 0;
		}
		return $st->fetchAll(PDO::FETCH_COLUMN, 0);
	}
        public function update($id=0, $email="", $phone="", $address=""){
            
            $sql = "update profile set email = :email, phone = :phone, address=:address where id = :id";
            $st = $this->db->prepare($sql);
            $st->execute(array(":id"=>$id,":email"=>$email, ":phone"=>$phone, ":address"=>$address));
        }
        public function add($first='',$last='',$un='',$pass='',$email='',$phone='',$address='',$age=''){
            
            $sql = "INSERT INTO characters(first_name, last_name, un, pass)
                    VALUES (:first,:last,:un,:pass)";
            
            $st = $this->db->prepare($sql);
            $st->execute(array(":un"=>$un,":pass"=>$pass,":first"=>$first,":last"=>$last));
            $userid = $this->db->lastInsertId();
            
            $sql = "INSERT INTO profile(email, phone, address, age)
                    VALUES (:email,:phone,:address,:age)";
            
            $st = $this->db->prepare($sql);
            $st->execute(array(":email"=>$email,":phone"=>$phone,":address"=>$address,":age"=>$age));
            
        }
        public function delete($id=0){
            
            $sql = 'delete from profile where id = :id';
            $st = $this->db->prepare($sql);
            $st->execute(array(":id"=>$id));
            
            $sql = 'delete from characters where id = :id';
            $st = $this->db->prepare($sql);
            $st->execute(array(":id"=>$id));
        }
}
}
	
	
	
	
?>