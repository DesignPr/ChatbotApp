
<?php 
$con = mysqli_connect('localhost','root','','login')  
or die("Connection Error: " . mysqli_error($conn));

if(isset($_POST["login"]))
{
   if(!empty($_POST["Username"]) && !empty($_POST["password"]))
   {
$lname = $_POST['Username']; 
$lpass = $_POST['password']; 

$validate_query = "SELECT Username , password FROM register";
$Execute = mysqli_query($con,$validate_query);
while($row = mysqli_fetch_array($Execute))
{
	  $username = $row["Username"];
       $pass = $row["password"];

       if( $lname == $username && $lpass == $pass){
           header("Location: Navbar.html");
       }
}

  
}
}

?>

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
  <h2>Login</h2>
  <form method="POST"  action="loginfile.php" >
    
    <div class="inputBox">
   
    <input type="text" name="Username" required onkeyup="this.setAttribute('value', this.value);" value="">
      <label>Username</label>
    </div>
    <div class="inputBox">
      <input type="password" name="password" required value=""
             onkeyup="this.setAttribute('value', this.value);"
             
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <label>Password</label>
    <div class="inputBox">
    <input type="submit" name="login" value="login">
   <!-- <a href="#">Forgot password</a><br><br> -->
   </div>
  </form>
 
</div>

    </div> <!--Login panel close-->

</body>

</html>