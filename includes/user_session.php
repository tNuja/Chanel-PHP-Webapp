<?php
error_reporting(0); 
session_start();
$loged_user=$_SESSION['users'];
$con1=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con1));
$quex="SELECT * from personal_det where user_Name='$loged_user' ";
$rowb=mysqli_query($con1,$quex) or die(mysqli_error($con1));
$id = mysqli_fetch_array($rowb);
$userid=$id[user_id];
if(!$loged_user)
{
header("login.php");
exit;
}
?>