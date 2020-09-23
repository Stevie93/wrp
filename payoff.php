<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include 'datasheet.php';
 
sec_session_start();

$id = $_GET['id'];

$stmt = $mysqli->prepare("UPDATE data SET outstanding='0' WHERE id='$id'");
$stmt->execute();

echo '<script type="text/javascript">
var hWndB = window.open("datasheet.php"),
    hWndA = window.self;

hWndB.onunload = function(){ hWndA.location.reload(); }

YOUR JS HERE</script>';
// header("Refresh:0; url=datasheet.php");

?>