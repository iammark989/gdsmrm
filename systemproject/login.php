<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
   
    <title>AMS</title>
    <?php include('inc/header.php'); ?>
    <?php include_once('classes/dbconnection.php'); ?>
  
</head>
<style>html, body {
  height: 100%;
  margin: 0;
}
</style>
<body>

<!-- form -->



<div class='container-fluid login-cont-p'>
   
            <div class='container border login-cont-c'>

                 <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" id="login">
                    <div class="mb-3 text-center"><span class="h2">Login</span></div>
                    <hr>
                    <div class="text-center alert-warning" id="alertincorrect" hidden><span>Incorrect Username or Password!</span></div>
                    <div class="mb-2">
                        <label for="username" class="form-label login-label">Username :</label>
                            <div class="input-wrapper">
                                <input type="text" id="username" class="form-control" name="username" placeholder="Username" maxlength="30" />
                                 <i class="lni lni-user-4"></i>
                             </div>
                    </div>

                    <div class="mb-3 mt-2">
                       <label for="password" class="form-label login-label">Password :</label>
                            <div class="input-wrapper">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" maxlength="25" />
                                <i class="lni lni-key-1"></i>
                            </div>
                    </div>
                  
                    <div class="mb-3">
                    <input type="submit" value="Submit" id="submit"class="btn btn-primary login-label">
                    </div>
                 

                 </form>

                <button id='sample'>button</button>
               
                <!--
               <?php 

               // $db = new dbconnection;
              //  $dba = $db->conn;
               // if($_SERVER['REQUEST_METHOD'] == "POST"){
                //    $USERNAME = $_POST['username'];

                 //   echo $USERNAME;

                  //  $qry = $dba->query("SELECT * FROM users WHERE username='$USERNAME'");
                  //  if($qry->num_rows > 0) {
                  //      $row = $qry->fetch_assoc();
                    //$row = $qry->fetch_array(MYSQLI_ASSOC);
                 //       echo $row['user_password'];
                 //   }
              //  }

                ?>
                -->
   
            </div>

    
     
</div>



</body>
</html>