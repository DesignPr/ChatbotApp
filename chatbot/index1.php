<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

if (isset($_SESSION['success'])) :
?>
<div>
	<h3>
	<?php 
		echo $_SESSION['success'];
		unset($_SESSION['success']);
	?>			
	</h3>
</div>
<?php endif ?>

<?php (isset($_SESSION['Username'])):   ?>
<h3>Welcome<strong><?php echo $_SESSION['Username']; ?></strong></h3>
<button><a href="index1.php?logout='1'"></a></button>
<?php endif ?>

</body>
</html>



