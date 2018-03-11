<?php ?>
<!DOCTYPE html>
<html>
<title>SIGNUP</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<style>
body {font-family: "Lato", sans-serif; color:#777;}
* {box-sizing: border-box}
form {border: 3px solid #f1f1f1;width:600px; margin:-110px auto;}
/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
.radio{
   padding: 12px; 
   margin: 5px 0 22px 0;
   margin-left: -12px;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}
.imgcontainer {
    text-align: center;  
}
img.avatar {
    width: 20%;
    border-radius: 50%;
    margin-top: -15px;
    float: right;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>
<img src="images/logo.png" alt="Logo" height="100" width="100" style="border-radius:50%;margin-top:25px">
<form method="POST" action="conSignup.php">
  <div class="container">
      <h1>Sign Up</h1> <div class="imgcontainer">
    <img src="images/icon1.png" alt="Avatar" class="avatar">
    </div> <br/>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    
   <div class="radio">
   <label for="gender"><b>Gender</b></label>
    <input type="radio" name="gender" value="F" checked> Female
    <input type="radio" name="gender" value="M"> Male
    <input type="radio" name="gender" value="O"> Other<br>
    </div>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <button type="button" class="cancelbtn"><a href="index.html" style="color:white">Cancel</a></button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
?>
