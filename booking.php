<?php
include("database.php");
session_start();

if(!$con){
    die("could not connect:".mysqli_connect_error());
}
mysqli_select_db($con,"event");
$username=$_POST['user'];
$Date=$_POST['date'];
$estimate=$_POST['count'];
$price=$_POST['budget'];
$destination=$_POST['dest'];
$eventtype=$_POST['type'];




mysqli_query($con,"INSERT INTO customer_booking VALUES('$username','$Date','$estimate','$price','$destination','$eventtype')")
or

die(mysqli_connect_error());

echo 'Inserted Successfully';
header('location: testimonials.html');
mysqli_close($con);

?>