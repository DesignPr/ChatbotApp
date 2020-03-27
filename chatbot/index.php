<?php 
    $con = mysqli_connect('localhost','root','','login')  or die("Connection Error: " . mysqli_error($conn));
    
    if(isset($_POST["sign-in"]))
    {
       if(!empty($_POST["Username"]) &&  !empty($_POST["email"]) && !empty($_POST["password"]))
       {
           $rname = $_POST["Username"];
           $remail = $_POST["email"];
           $rpass = $_POST["password"];
        
           $query = "INSERT INTO register (Username,email,password) 
           VALUES ('$rname','$remail','$rpass')";
           $Execute = mysqli_query($con,$query);
           if($Execute)
           {
            header('Location:loginfile.php');
           echo "<script type='text/javascript'>
            document.getElementByID('success') = 'success Register'
           </script>";


           }
       }
    }
    
    ?>  



<!DOCTYPE html>
<html>
<head>
	<title>Login Form Design[CHATBOT]</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="login" >
		<img src="cute.png" class="cute">

	<div class="box" >
    <h1 style="text-align: center;">Welcome To Carrer Guidance Chatbot</h1>
  <h2>Register</h2>
  <form method="POST"  action="index.php" >
    
    <div class="inputBox">
   
    <input type="text" name="Username" required onkeyup="this.setAttribute('value', this.value);" value="">
      <label>Username</label>
    </div>
    <div class="inputBox">
    	<input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
    	<label>Email Address</label>
    </div>

    <div class="inputBox">
      <input type="password" name="password" required value=""
             onkeyup="this.setAttribute('value', this.value);"
             
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <label>Password</label>
    <div class="inputBox">
   <input type="submit" name="sign-in" value="Sign_Up">
   <!-- <a href="#">Forgot password</a><br><br> -->
     <a href="loginfile.php"><input type="submit" name="Login-in" value="Login">Login Here</a>
   </div>
  </form>
 
</div>

		</div> <!--Login panel close-->

</body>

</html>




