<?php require_once("includes/user_session.php");?>
<?php require_once("includes/constDatabase.php"); 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
if(isset($_POST['delete']))
{
	$id=$_POST['delete_rec_id'];
	$deletion="DELETE from post WHERE post_id='$id'";
	$Del=mysqli_query($con,$deletion) or die(mysqli_error($con));
	if($Del)
	{
		header("location:myAds.php?msg=POST deleted.");
		exit;
	}
	else
	{
		header("location:myAds.php?msg=POST could not be deleted try again.");
		exit;
	}
}
?>
