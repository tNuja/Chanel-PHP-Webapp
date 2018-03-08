<?php
require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
if(isset($_POST['textm']) && isset($_FILES['photo']['name'])) {
$ab=$_POST['textm'];
$name_photo=$_FILES['photo']['name'];
$type_photo=$_FILES['photo']['type'];
$error_photo=$_FILES['photo']['error'];
$temp_photo=$_FILES['photo']['tmp_name'];
if($type_photo=="image/jpg" || $type_photo=="image/jpeg" || $type_photo=="image/bmp" || $type_photo=="image/png")
	{
               
		if(move_uploaded_file($temp_photo,"images/".$name_photo))
	{
		$query_insert="INSERT INTO `about` (`id`, `user_id`,`status`,`pro_pic`) VALUES (NULL, '$userid','$ab', 'images/$name_photo')";
                $insertiontodatabase=mysqli_query($con,$query_insert) or die(mysqli_error($con));
						if($insertiontodatabase)
						{
                                                        
							header('location:myAds.php?msg=Uploding SuccessFull');
							exit;
						}
						else
						{
							header('location:myAds.php?msg=Uploading Error11');	
						}
					}
					else
					{
						header('location:myAds.php?msg=Uploading Failed.');
						exit;
					}
	}
	else
	{
		header("location:myAds.php?msg=Sorry Invalid Type Image!");
		exit;
	}
}
?>
