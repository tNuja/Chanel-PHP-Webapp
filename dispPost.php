<?php require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con)); 
if(isset($_POST['details']))
{
    $id=$_POST['det_rec_id'];
     $query="Select * from post JOIN personal_det on post.user_id=personal_det.user_id where post_id=$id ";
     $userad=mysqli_query($con,$query)or die(mysqli_error($con)) ;
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="includes/w3-style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <body>
       <?php include("includes/head-side.html"); ?>
       <div class="w3-main" style="margin-left:300px">
<div id="body">
    <?php $ret=mysqli_fetch_array($userad) ;
 ?>
<table width="100%" cellspacing="4" cellpadding="4" id="table">
  <tr >
      <td colspan="2" class="adtitle"><span style="color:#666;"><?php echo $ret['title']; ?></span></td>
  </tr>
  <tr>
    <td rowspan="3" id="adpic"><img src="<?php echo ucwords($ret['post_img']);?>"
     alt="pic" style="border-radius:50%; height:250px; width:250px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
        
        box-shadow:  0px 0px 5px 1px #FFD57D; "/></td>
    
    <td class="adbg" ><span style="color:#666;margin-left:300px"><i class="fa fa-inr"></i><?php echo $ret['price']; ?></span></td>
    </tr>
    <tr>
        <td  class="adbg"> <span style="color:#666;margin-left:300px">Seller<br/><span style="color:#217c76;margin-left:300px"><?php echo $ret['user_Name']; ?></span></span></td> 
  </tr>
  <td> 
         <span style="color:#217c76;margin-left:270px"><button title="message" data-toggle="modal" data-target="#myModal" style="background-color:#f2f2f2;border:none;color:#217c76"><i class="fa fa-paper-plane w3-button"></i></button>Leave a message
             </span>
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message</h4>
        </div>
        <div class="modal-body">
          <form action="sndMsg.php" method="post">
              <textarea name='textm' cols='60' rows='10' placeholder="Write your message"></textarea>
      <input type="hidden" name="message" value="<?php print $ret['user_id']; ?>"/>
          <button type="submit" class="btn btn-default">Send</button>
        </div>
      </div>
      
    </div>
  </div>
  </td>
</table>
    </div>
           <h2><b>Product Description</b></h2>
           <div style="font-family:'Lato'">
               <p> <?php echo $ret['post_des']; ?></p>
           </div>
            <h4 id="contact" style="margin-left:420px"><i class="fa fa-address-book-o  w3-text-grey"></i><<b>-Contact Me</b></h4>
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
       </body>
       </html>
<?php }
?>