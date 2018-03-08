<?php
error_reporting(0);
require("includes/constDatabase.php");
if(isset($_POST['uname']))
{
	Login(); 
}
function Login()
{
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
if(!empty($_POST['uname']) && (!empty($_POST['psw']))) {
    $query = mysqli_query($con,"SELECT * FROM personal_det WHERE user_Name = '$_POST[uname]' AND pass = '$_POST[psw]'") or die(mysqli_error($con));
    if(!$row = mysqli_fetch_array($query)) {
        echo "NOT A MEMBER ?  ";
                echo '
                <a href="signUp.php" style="color:dodgerblue">Click Here to SIGNUP</a>';
         }
        else {
            $username=$_POST['uname'];
		session_start();
		$_SESSION['users']=$username;
		header("location:dispAds.php");
		exit;
        }
}
    }
?>