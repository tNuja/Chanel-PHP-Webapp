<?php
error_reporting(0);
require("includes/constDatabase.php");
$username=""; $sex=""; $email=""; $password=""; 
if(isset($_POST['uname']))
{
	SignUp(); 
}
function NewUser() { 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
$username = mysqli_real_escape_string($con,$_POST['uname']); 
$sex=mysqli_real_escape_string($con,$_POST['gender']);
$email = mysqli_real_escape_string($con,$_POST['email']); 
$password =mysqli_real_escape_string($con,$_POST['psw']); 
$query = "INSERT INTO personal_det (user_Name,emaiLId,pass,Sex,registration_date) VALUES ('$username','$email','$password','$sex',NOW())";
$data = mysqli_query($con,$query)or die(mysqli_error($con)); 
if($data) 
    { echo "YOUR REGISTRATION IS COMPLETED..."; 
    echo '
     <a href="login.php" style="color:dodgerblue">Click Here to LOGIN</a>';
    } 
    }
function SignUp() 
{ 
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
    if(!empty($_POST['uname'])) {
    $query = mysqli_query($con,"SELECT * FROM personal_det WHERE user_Name = '$_POST[uname]' AND emaiLId = '$_POST[email]'") or die(mysqli_error($con));
    if(!$row = mysqli_fetch_array($query)) 
            { 
                NewUser(); 
            }   
            else{
                echo "SORRY...YOU ARE ALREADY A REGISTERED USER...\n";
                echo '
                <a href="login.php" style="color:dodgerblue">Click Here to LOGIN</a>';
            }
    }
}
?>