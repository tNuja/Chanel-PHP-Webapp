<?php
require_once("includes/constDatabase.php");
require_once("includes/user_session.php");
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to database: " . mysqli_error($con));
$query = mysqli_query($con,"SELECT * FROM messages WHERE reciever_id = '$userid' order by timestamp desc") or die(mysqli_error($con));
 ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="includes/w3-style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
   <body>
       <?php include("includes/head-side.html"); ?>
       <div class="w3-main" style="margin-left:300px">
<div id="body">
   <?php if(mysqli_num_rows($query)==0)
{
	echo "You have no messages.";
} 
else{ ?>
  <table>
	<tr>
    	<th>Title</th>
        <th>Sender</th>
        <th>Time</th>
    </tr> 
<?php while($ret=mysqli_fetch_array($query))
{
 $senderid=$ret['sender_id'];
$query2 = mysqli_query($con,"SELECT * FROM personal_det WHERE user_id = '$senderid'") or die(mysqli_error($con));
$rec=mysqli_fetch_array($query2);
$sendername=$rec['user_Name'];
?>
	<tr>
    	<td><?php echo htmlentities($ret['text'], ENT_QUOTES, 'UTF-8'); ?></td>
    	<td><?php echo htmlentities($sendername, ENT_QUOTES, 'UTF-8'); ?></td>
    	<td><?php echo $ret['timestamp']; ?></td>
        <td><button title="message" data-toggle="modal" data-target="#myModal" style="background-color:transparent;border:none;color:#217c76"><i class="fa fa-paper-plane w3-button"></i></button>Reply
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reply</h4>
        </div>
        <div class="modal-body">
          <form action="sndMsg.php" method="post">
              <textarea name='textm' cols='60' rows='10' placeholder="Write your reply"></textarea>
      <input type="hidden" name="message" value="<?php print $senderid; ?>"/>
      <input type="hidden" name="reply" value="0">
          <button type="submit" class="btn btn-default">Send</button>
        </div>
      </div>
      
    </div>
  </div></td>
    </tr>
<?php
}
}
?>
</table>
</div>
       </div>
       </body>
       </html>


