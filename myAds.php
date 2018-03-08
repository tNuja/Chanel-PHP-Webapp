<?php
require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
if (isset($_POST['port']))
{
    $id=$_POST['port'];
    $query = mysqli_query($con,"SELECT * FROM personal_det WHERE user_id = '$id'") or die(mysqli_error($con));
    $ret=mysqli_fetch_array($query);
}
else{
$query = mysqli_query($con,"SELECT * FROM personal_det WHERE user_id = '$userid'") or die(mysqli_error($con));
$ret=mysqli_fetch_array($query);
 $id=$userid;
}
 $query2 = mysqli_query($con,"SELECT * FROM post WHERE user_id = '$id'") or die(mysqli_error($con));
 $query3 = mysqli_query($con,"SELECT * FROM about WHERE user_id = '$id'") or die(mysqli_error($con));
 $rab=mysqli_fetch_array($query3)?>
 <!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="includes/w3-style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
   <body>
       <?php include("includes/head-side.html"); ?>
       <div class="w3-main" style="margin-left:300px; font-family:'Lato',sans-serif">
           <h2>About me</h2> 
           <img src="<?php echo ucwords($rab['pro_pic']);?>" 
     alt="pic" style="border-radius:50%; height:250px; width:250px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
        box-shadow:  0px 0px 5px 1px #FFD57D; "/> <i class="fa fa-pencil fa-fw w3-button"></i>
           <h5><?php echo $rab['status']; ?></h5> 
           <h2><?php echo $ret['user_Name']; ?>  - Active works </h2>
<div id="body">
    <?php
$total_recs=mysqli_num_rows($query2);
	if($total_recs == 0)
	 { 	
		echo "Sorry you don't have any current posted adds";
		exit;	
	 } 
else {
 while($rec=mysqli_fetch_array($query2)){ 
 ?>
  <table width="100%" cellspacing="4" cellpadding="4" id="table">
  <tr >
    <td colspan="2" class="adtitle"><span style="color:#666;"><?php echo $rec['title']; ?></span></td>
  </tr>
  <tr>
    <td rowspan="3" id="adpic"><img src="<?php echo ucwords($rec['post_img']);?>"
     alt="pic" style="border-radius:40%; height:250px; width:250px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
        box-shadow:  0px 0px 5px 1px #FFD57D; "/></td>
    
    <td class="adbg" ><span style="color:#666;margin-left:300px"><i class="fa fa-inr"></i><?php echo $rec['price']; ?></span></td>
    </tr>
    <?php if (!isset($_POST['port'])){ ?>
  <tr>
      <td>
          <form id="delete" method="post" action="delpost.php">
 <input type="hidden" name="delete_rec_id" value="<?php print $rec['post_id']; ?>"/>
        <i class="w3-padding w3-text-teal fa fa-trash" style="margin-left:282px"></i> <input type="submit" name="delete" value="Delete Post"/> 
          </form>
    </td>
  </tr>
  <?php }?>
</table>
 <?php }
   } ?>
    <div class="w3-panel w3-large">
  </div>
     <h4 id="contact" style="margin-left:420px"><i class="fa fa-address-book-o  w3-text-grey"></i><b>-Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p><?php echo $ret['emaiLId']; ?></p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p><?php echo $ret['loc']; ?></p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p><?php echo $ret['contactNo']; ?></p>
      </div>
    </div>
    </div>
       </div>
</body>
</html>

