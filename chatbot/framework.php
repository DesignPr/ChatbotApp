
<!DOCTYPE html>
<html>
<head>
  <title>chatbot framework Design</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
 <!-- <link rel="stylesheet" type="text/css" href="css/st.css"> -->
  <link rel="stylesheet" type="text/css" href="css/chatbot-style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!--
<div class="container">
  <img src="career.png" alt="career image" class="image">
  <div class="middle">
    <div class="text">About Career Bot</div>
  </div>
</div> -->
<div class="container">
  <div class="msg-header">
    <div class="msg-header-img">
      <img src="happy.png">
    </div>
    
  </div>
  
</div>



</body>
</html>

<?php 
$host="localhost";
$Username="root";
$Password="";
$db="demo";

$link = mysql_connect($host,$Username,$Password);
mysql_select_db($db);

if($link === false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}

if(isset($_POST['sign-in']))
{
  $Username= $_POST['Username'];
  $Password= $_POST['Password'];
  $sql= "select * from logininfo where Username='".$Username."'AND Password='".$Password."'limit 1";
    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1)
    {
      echo "Welcome {$_POST["Username"]}! You have logged in Successfully";
      exit();
    }
    else
    {
      echo "Your information is incorrect";
      exit();
    }

}



