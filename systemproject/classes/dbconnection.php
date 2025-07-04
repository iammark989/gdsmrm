
<?php



include_once('systeminitialize.php');



class dbconnection {

private $host = db_server;
private $servername = db_name;
private $serveruser = db_user;
private $serverpass = db_password;


	public $conn;

	public function __construct(){
		if(!isset($this->conn)){
			$this->conn = new mysqli($this->host,$this->serveruser,$this->serverpass,$this->servername);
			
			if(!$this->conn){
				echo "cannot connect to server!";
				exit;
			}
		}
	}
	public function __destruct(){
		$this->conn->close();
	}


}


?>