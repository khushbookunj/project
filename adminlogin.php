<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:health/admin/dashboard.php');
}
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
<a href="index.html" style="float:right; margin-right:30px; margin-top:20px; color:#342C46; font-size:24px;">Home</a>
<meta charset="UTF-8">
<title>Login</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
			<style type="text/css">
			body
			{
				background-repeat:no-repeat;
				background-size:cover;
				background-image:url('images/care.jpg');
			}
			</style>
</head>
<body>
<div class="login">
<img src="health/image/admin.jpg">
<h1 align="center">Admin Login</h1>
<form action="adminlogin.php" method="post">
  <table align="center">
   <tr>
     <td>Username</td><td><input type="text" name="uname" required></td>
   </tr>
  <tr>
    <td>Password</td><td><input type="password" name="pass" required></td>
  </tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	<?php
	
	include('dbcon.php');
	
	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		
		$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
		$run= mysqli_query($con,$qry);
		$row= mysqli_num_rows($run);
		if($row <1)
		{
			?>
			<script>
			   alert('Username or Password not match!!'); 
			   window.open('adminlogin.php','_self');
			 </script>
			 <?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			session_start();
			$_SESSION['uid']=$id;
			header('location:health/admin/dashboard.php');
		}
			
	}
	?>