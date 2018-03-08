<?php
require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
if (isset($_POST['message'])) {
  $recieverid=$_POST['message'];
  $senderid=$userid;
  $text=$_POST['textm'];
  $query_insert="INSERT INTO `messages` (`sender_id`, `reciever_id`,`text`,`timestamp`) VALUES ( '$userid','$recieverid','$text',NOW())";
  $insert=mysqli_query($con,$query_insert) or die(mysqli_error($con));
  if($insert)
		{
                    if(isset($_POST['reply'])){
                     header('location:myMsgs.php?msg=SuccessFully replied');
                   } else{
		header('location:dispAds.php?msg=SuccessFully sent');
			}
                        exit;
                 }
}


