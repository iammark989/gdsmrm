<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" >
<head>
    
    <title>sample</title>
<?php include('inc/header.php'); ?>
<script> if(localStorage.getItem("user") <= 0 && localStorage.getItem("user") <= 0 ){window.location.href="login.php";}</script>
</head>
<body>
<div class="d-flex"
<?php include_once('inc.php');?>
     <div class="main">
        <main class="p-3">
            <div class="container-fluid">
                <div class="mb-3 text-center">
                <h1>YAHOO!!</h1>
                <?php 
               
            print_r($_SESSION);
                
                echo htmlspecialchars($_SERVER['PHP_SELF']);
                ?>
               <br>
                <?php
              class sample {

                    function sampleA() {
                        $x = 1;
                        $y = 1;
                        $z = $x + $y;
                        echo $z;
                    }
                    function sampleB() {
                        $x = 1;
                        $y = 1;
                        $z = $x - $y;
                        echo $z;
                    }

                }

                $action = new sample();
                $s = "addition";
                switch($s){
                    case 'addition':
                    echo $action->sampleA();
                    break;
                    case 'subtration':
                    echo $action->sampleB();
                    break;
                }

                ?>


                </div>

            </div>
        </main>
     </div>






</div>
</body>

</html>