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
			 <h4><a href="index.html" style="float:left; margin-left:20px; color:#514141; font-size:24px;">Home</a></h4>
			<link href="css/style1.css" rel="stylesheet" type="text/css">
			<style type="text/css">
			body
			{
				background-repeat:no-repeat;
				background-size:cover;
				background-image:url('images/care1.jpg');
			}
			</style>
						</head>
			<body>
			
<div class="login">
<img src="health/image/user.jpg">
<h1 align="center">Login</h1>
<form action="login.php" method="post">
  <table align="center">
   <tr>
     <td>Username</td><td><input type="text" name="uname" placeholder="Username" required></td>
   </tr>
  <tr>
    <td>Password</td><td><input type="password" name="pass" placeholder="Password" required></td>
  </tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
	</tr>
	</table>
	</form>
	 <h3 align="center">New User Register!!<div id="register"><a href="new_register.php">Register</a></div></h3>
	</div>
	</body>
	</html>
	<?php
	
	include('dbcon.php');
	
	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		
		$qry="SELECT * FROM `patient` WHERE `username`='$username' AND `password`='$password';";
		$run= mysqli_query($con,$qry);
		$row= mysqli_num_rows($run);
		if($row <1)
		{
			?>
			<script>
			   alert('Username or Password not match!!'); 
			   window.open('login.php','_self');
			 </script>
			 <?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			session_start();
			$_SESSION['uid']=$id;
			header('location:health/registration.php');
		}
			
	}
	?>