<?php
include("database.php");
session_start();

if(!$con){
    die("could not connect:".mysqli_connect_error());
}
mysqli_select_db($con,"event");
$username=$_POST['username'];
$address=$_POST['addr'];
$emailId=$_POST['email'];
$phone=$_POST['phoneNo'];
$subject=$_POST['sub'];
mysqli_query($con,"INSERT INTO customer_contact VALUES('$username','$address','$emailId','$phone','$subject')")
or

die(mysqli_connect_error());

echo 'inserted succesfully';
header('location:about_us.html');
mysqli_close($con);

?>