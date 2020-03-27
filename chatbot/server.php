


<?php 
session_start();
//initialize variables
$username="";
$email="";
$password="";
$error = array();


//connect to db

$db = mysqli_connect('localhost','root','','login')  or die("could not connect to database");
//register users
if(isset($_POST['sign-in'])){
$username = mysqli_real_escape_string($db,$_POST['Username']);
$email = mysqli_real_escape_string($db,$_POST['email']);

$password = mysqli_real_escape_string($db,$_POST['password']);

}
//form validation
if(empty($username)){array_push($error,"Username is required");}
if(empty($password)){array_push($error,"password is required");}
if(empty($email)){array_push($error,"Email is required");}

// check db for existing user with same Username
$user_check_query = "SELECT * FROM  register WHERE Username='$username' and email = '$email' LIMIT 1";

$result = mysqli_query($db,$user_check_query);
$user =mysqli_fetch_assoc($result);

if($user){
	   if($user['Username']=== $username){array_push($error,"Username already exist");}
	   if($user['email']=== $email){array_push($error,"Email already exist");}
}
// Register the userif no error
if(count($error)===0)
{
	$password = md5($password); // this will encrypt the password
	$query = "INSERT INTO register(Username,email,password) VALUES('$username','$email','$password')";
	mysqli_query($db,$query);
	$SESSION['Username']=$username;
	$SESSION['success']="You are logged in";
	header('location:loginfile.php');
}


 ?>

