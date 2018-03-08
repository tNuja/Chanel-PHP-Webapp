<?php
include ("includes/constDatabase.php");
include("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="includes/w3-style.css">
<style type="text/css">
.valid{
	text-align:left;
	font-size:10px;
	font-family:"Comic Sans MS", cursive;
	color:#F00;	
	
}
.radio{
   padding: 12px; 
   margin-bottom:14px;
   margin-left: -12px;
}
</style>
   <body>
       <?php include("includes/head-side.html"); ?>
 <div class="w3-main" style="margin-left:300px">
    <div id="body">
        <div id="maincontent">
<div id="topheading">
<h2> Post a Free Ad</h2>
</div>
<div id="allform">
<form action="includes/postdata.php" method="post" enctype="multipart/form-data">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="text" style="text-align:center;"><span style="color:red;">NOTE:</span> Fields with <span style="color:red;">*</span> are compulsory<br/></td>
    
  </tr>
  
  <tr>
    <td width="150" class="text">Choose post type</td>
    <td width="500" class="textwithbg"> <div class="radio">
    <input type="radio" name="type" value='1' checked> For Sale
    <input type="radio" name="type" value='2'> Community
    </div></td>
  </tr> 
  <tr>
    <td width="200" class="text"><span style="color:red;">*</span>Ad title:</td>
    <td ><input name="title"  class="textfeilds" required type="text" placeholder="Give a title for your product "></td>
  </tr>
   <tr>
    <td width="200" height="100" class="text"><span style="color:red;">*</span>Ad Photo:</td>
   <td><label for="photo"></label>
     <input type="file" name="photo" id="photo"><i class="fa fa-file-image-o"></i>
     <br/><span class="valid"></span></td>
  </tr>
   <tr>
    <td width="200" class="text">Description for your ad:</td>
    <td><textarea name='postDesc' cols='60' rows='10' placeholder="Describe what makes your ad unique."></textarea></td>
  </tr>
   <tr>
    <td width="200" class="text">Price:</td>
    <td style="font-size:15px; font-family:sans-serif;" ><p><i class="fa fa-inr"></i><input name="price" type="text"  placeholder="ex: 50.00"></td>
  </tr>
</table>
    <p> *Leave the price box empty if your post is community. </p>
<p> *Your contact information will be posted along with the ad.</p>
    <button type="submit" style=" background-color: #4CAF50;
    color: white; width:10%; height:40px" >Post</button><input type="hidden" name="post" value="mmm" >
</form>			
</div>	
  </div>
</div>	
</div>
</body>

</html>
    
