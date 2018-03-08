<?php
require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
if (isset($_POST['liked'])) {
		$post_id = $_POST['liked'];
		$result = mysqli_query($con, "SELECT * FROM post WHERE post_id=$post_id") or die(mysqli_error($con));
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];
		mysqli_query($con, "INSERT INTO likes (user_id, post_id) VALUES ('$userid','$post_id')");
		mysqli_query($con, "UPDATE post SET likes=$n+1 WHERE post_id='$post_id'");
		header('location:dispAds.php');
	}
