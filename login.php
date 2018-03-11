<?php ?>
<!DOCTYPE html>
<html>
<head>
 <title>Login page</title>
<meta name="viewport" content="width=device_width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<style>
body {font-family: "Lato", sans-serif; color:#777;}
form {border: 1px solid #f1f1f1;width:600px; margin:-125px auto;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0px; 
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    cursor: pointer;
    width: 40%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 20px 0 10px 0;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
    .cancelbtn {
       width: 15%;
    }
</style>
</head>
<body>
    <img src="images/logo.png" alt="Logo" height="100" width="100" style="border-radius:50%">
<form method="POST" action="conLogin.php">
  <div class="imgcontainer">
    <h2 style="float:left">LOGIN</h2>
    <img src="images/img_avatar2.jpg" alt="Avatar" class="avatar">
         
  </div> <br/>
  <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
    <br/>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
     <br/>   
    <button type="submit">Login</button>
    <br/>
    <label>
        <input type="checkbox" checked="checked" name="remember">Remember me
         </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <button type="button" class="cancelbtn"><a href="index.html" style="color:white">Cancel</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
?>
