<?php
require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
 $query2 = mysqli_query($con,"SELECT * from likes WHERE user_id = '$userid'") or die(mysqli_error($con));
 $query3 = mysqli_query($con,"SELECT * from post WHERE post_id = '$req[post_id]'") or die(mysqli_error($con));
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
	       <h2>My LikeList</h2>
<div id="body">
    <?php while($req=mysqli_fetch_array($query2)){ 
        $query3 = mysqli_query($con,"SELECT * from post JOIN personal_det on post.user_id=personal_det.user_id WHERE post_id = '$req[post_id]'") or die(mysqli_error($con));
        $rex=mysqli_fetch_array($query3);?>
    <table width="100%" cellspacing="4" cellpadding="4" id="table">
  <tr >
    <td colspan="2" class="adtitle"><span style="color:#666;"><?php echo $rex['title']; ?></span></td>
  </tr>
  <tr>
    <td rowspan="3" id="adpic"><img src="<?php echo ucwords($rex['post_img']);?>"
     alt="pic" style="border-radius:40%; height:250px; width:250px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
     box-shadow:  0px 0px 5px 1px #FFD57D; "/>
    
						<!-- user already likes post -->
                                                <div style="margin-left:260px">
						<button title="Liked" style="margin-left:50px;background-color:#f2f2f2;border:none"><i class="fa fa-star w3-button" style="color:goldenrod"></i></button><?php echo $rex['likes']; ?>
                                                </div>
					
    <?php if($rex['type_id']==1){ echo'
    <td class="adbg" ><span style="color:#666;margin-left:220px">For Sale<br/><span style="color:#217c76;margin-left:220px"><i class="fa fa-inr"></i>'; echo $rex['price'];echo'</span></span></td>
    '; } 
 else {
    echo'
     <td class="adbg" ><span style="color:#666;margin-left:220px">Community</span></td>';   
 }?>
  </tr>
  <td> <form action="myAds.php" method="post">
      <input type="hidden" name="port" value="<?php print $rex['user_id']; ?>"/>
         <span style="color:#666;margin-left:220px">Seller<br/><span style="color:#217c76;margin-left:200px"><button title="Seller Portfolio" type="submit" style="background-color:#f2f2f2;border:none;color:#217c76"><i class="fa fa-user w3-button"></i></button><?php echo $rex['user_Name']; ?>
             </span></span>
                 </form>
  </td>
        <tr>
      <td> <form id="details" method="post" action="dispPost.php">
 <input type="hidden" name="det_rec_id" value="<?php print $rex['post_id']; ?>"/>
        <i class="w3-padding w3-text-teal fa fa-info-circle" style="margin-left:204px"></i><input type="submit" name="details" value="Details"/>
          </form>
    </td>
  </tr>
</table>
    <?php } ?>
    </div>
       </div>
       </body>
       </html>
           
 
 


