<?php

require_once('../systemconfig.php');

class login extends dbconnection {

		function login() {
				
				extract($_POST);
					
				$qry = $this->conn->query("SELECT * FROM users WHERE username = '$username'");
				if($qry->num_rows > 0){
					$row = $qry->fetch_array(MYSQLI_ASSOC);
					$resp['status'] = "success";
					
				}else{
					$resp['status']= "failed";
				}
				return json_encode($resp);

		}

		

}

$login = new login();
echo $login->login();

//$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
//switch($action){
	//case $action = 'login';
	//echo $newlogin->login();
	//break;
//}





?>