<?php


/*
class masterlogin {
		function login(){
			$uname = "admin";
			extract($_POST);
			$qry = $dbcon->query("SELECT * FROM users WHERE username='$uname'");
			
			if($qry->num_rows > 0){
				$resp['status'] = "success"
			}else {
				$resp['status'] = "failed";
			}
			
			return json_encode($resp);
		}
		$resp['status'] = "success";
		return json_encode($resp);
		}

		function default(){
			$resp['stat'] = "sssss";
			return json_encode($resp);
		}

}	
		

$master = new masterlogin();
$action = "login");
switch("login"){
	case 'login':
	$resp['stat'] = "success";
	return json_encode($resp);
	break;
	default:
	echo $master->dafault();
	break;

}
*/




//require_once('db_init.php');

//$dbcon = new dbconnection;
//$conn = $dbcon->conn;

//include_once('sysfiles/init.php');




//}






class masterlogin extends dbconnection {

		function login() {

	// $dba->query("SELECT * FROM users WHERE username='$USERNAME'");
	$qry = $this->conn->query("SELECT * FROM users WHERE username='admin'");
		if($qry->num_rows > 0){
				$resp['status'] = "success";
		}else {
			$resp['status']="failed";
		}
		$resp['stat'] = strtolower($_SERVER['PHP_SELF']);

		return json_encode($resp);
} 
}
$master = new masterlogin;

echo $master->login();















?>