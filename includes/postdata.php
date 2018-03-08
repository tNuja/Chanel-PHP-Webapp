<?php
require_once("constDatabase.php");
require_once("user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
if(isset($_POST['title']) && $_POST['post']=="mmm")
{
$typo=$_POST['type'];
$ad_title=$_POST['title'];
$name_photo=$_FILES['photo']['name'];
$size_photo=$_FILES['photo']['size'];
$type_photo=$_FILES['photo']['type'];
$error_photo=$_FILES['photo']['error'];
$temp_photo=$_FILES['photo']['tmp_name'];
$description=$_POST['postDesc'];
$price=$_POST['price'];
if($type_photo=="image/jpg" || $type_photo=="image/jpeg" || $type_photo=="image/bmp" || $type_photo=="image/png")
	{
               
		if(move_uploaded_file($temp_photo,"../images/".$name_photo))
					{
                                                
                                               
                                                if($typo==2){
                                                    $price=0;
                                                }
						$query_insert="INSERT INTO `post` (`post_id`, `user_id`,`type_id`,`title`, `post_img`, `post_des`, `price`,`post_date`) VALUES (NULL, '$userid','$typo','$ad_title', 'images/$name_photo', '$description', '$price',NOW())";
						//echo $query_insert="INSERT INTO `post`.`freead` SET `id`='',`cat_id`='$gettingid',`ad_title`='$ad_title', `photo_name`='$name_photo', `description`='$description', `price`='$price';
						$insertiontodatabase=mysqli_query($con,$query_insert) or die(mysqli_error($con));
						if($insertiontodatabase)
						{
                                                        
							header('location:../dispAds.php?msg=Uploding SuccessFull');
							exit;
						}
						else
						{
							header('location:../postAd.php?msg=Uploading Error11');	
						}
					}
					else
					{
						header('location:../postAd.php?msg=Uploading Failed.');
						exit;
					}
	}
	else
	{
		header("location:../postAd.php?msg=Sorry Invalid Type Image!");
		exit;
	}
}
?>