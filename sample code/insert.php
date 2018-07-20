<?php

include("db.php");
if(isset($_POST['submit'])) {

$name = mysqli_real_escape_string($conn,$_POST['name']);
$emailid = mysqli_real_escape_string($conn,$_POST['emailid']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$score = mysqli_real_escape_string($conn,$_POST['score']);
$percentage = mysqli_real_escape_string($conn,$_POST['percentage']);





$res = mysqli_query($conn, "INSERT INTO student ( name, emailid, phone, score, percentage ) 
	VALUES ('$name', '$emailid', '$phone', '$score', '$percentage')");


if($res) {
  echo("Error description: " . mysqli_error($conn));
	header("Location: success.php");
	}
}
mysqli_close($conn);
?>



