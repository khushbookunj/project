
 <?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:health/registration.php');
}
?>
<!DOCTYPE HTML>
			<html lang="en_US">
			<head>
			<meta charset="UTF-8">
			<title>Smart Health Cunsulting</title>
			</head>
			<h4><a href="logout.php" style="float:right; margin-right:10px; color:#10175C; font-size:20px;">Logout</a></h4>
			<body bgcolor="#82857E">
			
			<form method="post" action="new_register.php" enctype="multipart/form-data">
<table align="center" border="1" width=40%;>
			<tr>
			<th>Username:</th><br>
			<td><input type="text" name="username" placeholder="Username" required></td>
</tr>
<tr>
<th>Address:</th><br>
<td><input type="text" name="address" placeholder="Address" required></td>
</tr>
<tr>
<th>Contact No:</th><br>
<td><input type="text" name="contact" placeholder="Enter Contact No" required></td>
</tr>

<tr>
<th>Email:</th><br>
<td><input type="email" name="email" placeholder="Enter Email"></td>
</tr>
<tr>
<th>Password:</th><br>
<td><input type="password" name="pass" placeholder="Enter Password"></td>
</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="Submit"></td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	

	<?php
		include('dbcon.php');
	
	     if(isset($_POST['submit']))
	{
	          $username= $_POST['username'];
				$address= $_POST['address'];
			$contact=$_POST['contact'];
			$email= $_POST['email'];
			$password= $_POST['pass'];
			$qry="INSERT INTO `patient`(`username`, `address`, `contact`, `email`, `password`) VALUES ('$username','$address','$contact','$email','$password')";
							$run= mysqli_query($con,$qry);
                 if($run == TRUE)			
				
				{
					?>
					<script>
					alert('Data Inserted successfully.');
					</script>
					<?php
				}
					
			}
			
			?>


