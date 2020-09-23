<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'psl-config.php';
 
sec_session_start();

$username1 =$_SESSION['username'];

$phone_1 = $phone_2 = '';

if (!empty($_REQUEST["phone_1"])) {
        $phone_1 = ($_REQUEST["phone_1"]);    
    }  
if (!empty($_REQUEST["phone_2"])) {
        $phone_2 = ($_REQUEST["phone_2"]);    
    }


$stmt = $mysqli->prepare("UPDATE users SET phone_1='$phone_1', phone_2='$phone_2' WHERE username='$username1'");


	if ($stmt){
	$stmt->execute();
    echo "You have successfully changed your numbers.";
    header("location: ../dashboard.php");
}

 header("location: ../dashboard.php");
?>


