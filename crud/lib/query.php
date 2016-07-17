<?php 
include ("./config/db-con.php");
class dbl{

		public $host=DB_HOST;
		public $user=DB_USER;
		public $pass=DB_PASS;
		public $name=DB_NAME;
		

		public $conn;
		public $error;
		// create connection here
		public function __construct(){

			$this->connect_db();
		}
		private function connect_db(){
			$this->conn=new mysqli($this->host,$this->user,$this->pass,$this->name);

			// check connnection here for database
			if(!$this->conn){
				$this->error="Database Connection Failed".$this->conn->connect_error();
				return false;
			}


		}
		// select or read query format
		public function read($myqyery){
			$result=$this->conn->query($myqyery) or die($this->conn->error.__LINE__);
			if ($result->num_rows>0) {
				return $result;
				
			}
			else {
				return false;
			}

		}

		// Insert query 
		public function insert($iquery){
			$insert_data=$this->conn->query($iquery) or die($this->conn->error.__LINE__);
			if ($insert_data) {
				header('Location: index.php?msg=data Inserted successfully');
				exit();
				
			}
			else {
				die($this->conn->errno.__LINE__);

			}


		}
		// Update query 
		public function update($uquery){
			$update_data=$this->conn->query($uquery) or die($this->conn->error.__LINE__);
			if ($uquery) {
				header('Location: index.php?msg=data Updated successfully');
				exit();
				
			}
			else {
				die($this->conn->errno.__LINE__);

			}


		}
		// Delete query 
		public function delete_row($dquery){
			$delete_data=$this->conn->query($dquery) or die($this->conn->error.__LINE__);
			if ($dquery) {
				header('Location: index.php?msg=data deleted successfully');
				exit();
				
			}
			else {
				die($this->conn->errno.__LINE__);

			}


		}



}