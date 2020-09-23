<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'psl-config.php';
 
sec_session_start();

$username1 =$_SESSION['username'];



if (isset($_POST['p'])){
$password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
}

// $password1 = mysqli_real_escape_string($password1);
// $password2 = mysqli_real_escape_string($password2);
$password1 = password_hash($password, PASSWORD_BCRYPT);
$stmt = $mysqli->prepare("UPDATE users SET password='$password1' WHERE username='$username1'");


	if ($stmt){
	$password = password_hash($password, PASSWORD_BCRYPT);
	$stmt->execute();
    echo "You have successfully changed your password.";
    header("location: ../dashboard.php");
}

// header("location: ../dashboard.php");
?>


