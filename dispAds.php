<?php
require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
$query=" Select * from post JOIN personal_det on post.user_id=personal_det.user_id order by post_date DESC";
$userad=mysqli_query($con,$query);
 ?> 

<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="includes/w3-style.css">
   <body>
       <?php include("includes/head-side.html"); ?>
       <div class="w3-main" style="margin-left:300px">
<div id="body">
    <?php
$total_recs=mysqli_num_rows($userad);
	if($total_recs == 0)
	 { 	
		echo "Sorry nothing is posted yet in this category";
		exit;	
	 } 
else {
 while($rec=mysqli_fetch_array($userad)){ 
     $pst=$rec['post_id'];
     $results = mysqli_query($con, "SELECT * FROM likes WHERE user_id='$userid' AND post_id='$pst' ") or die(mysqli_error($con));
     ?>
<table width="100%" cellspacing="4" cellpadding="4" id="table">
  <tr >
    <td colspan="2" class="adtitle"><span style="color:#666;"><?php echo $rec['title']; ?></span></td>
  </tr>
  <tr>
    <td rowspan="3" id="adpic"><img src="<?php echo ($rec['post_img']);?>"
     alt="pic" style="border-radius:40%; height:250px; width:250px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
     box-shadow:  0px 0px 5px 1px #FFD57D; "/>
    <?php if (mysqli_num_rows($results) == 1 ): ?>
						<!-- user already likes post -->
                                                <div style="margin-left:260px">
						<button title="Liked" style="margin-left:50px;background-color:#f2f2f2;border:none"><i class="fa fa-star w3-button" style="color:goldenrod"></i></button><?php echo $rec['likes']; ?>
                                                </div>
					<?php else: ?>
						<!-- user has not yet liked post -->
                                                 <form action="likes.php" method="post" style="margin-left:300px">
						<input type="hidden" name="liked" value="<?php print $rec['post_id']; ?>"/>
                                                <button title="Like this post" type="submit" style="background-color:#f2f2f2;border:none"><i class="fa fa-star w3-button" style="color:goldenrod"></i></button><?php echo $rec['likes']; ?>
                                                </form>
                                  <?php endif ?>
    <?php if($rec['type_id']==1){ echo'
    <td class="adbg" ><span style="color:#666;margin-left:220px">For Sale<br/><span style="color:#217c76;margin-left:220px"><i class="fa fa-inr"></i>'; echo $rec['price'];echo'</span></span></td>
    '; } 
 else {
    echo'
     <td class="adbg" ><span style="color:#666;margin-left:220px">Community</span></td>';   
 }?>
  </tr>
  <td> <form action="myAds.php" method="post">
      <input type="hidden" name="port" value="<?php print $rec['user_id']; ?>"/>
         <span style="color:#666;margin-left:220px">Seller<br/><span style="color:#217c76;margin-left:200px"><button title="Seller Portfolio" type="submit" style="background-color:#f2f2f2;border:none;color:#217c76"><i class="fa fa-user w3-button"></i></button><?php echo $rec['user_Name']; ?>
             </span></span>
                 </form>
  </td>
        <tr>
      <td> <form id="details" method="post" action="dispPost.php">
 <input type="hidden" name="det_rec_id" value="<?php print $rec['post_id']; ?>"/>
        <i class="w3-padding w3-text-teal fa fa-info-circle" style="margin-left:204px"></i><input type="submit" name="details" value="Details"/>
          </form>
    </td>
  </tr>
</table>
 <?php }
   } ?>
     <?php include("includes/footer.html");?>
    </div>
       </div>
</body>
</html>
