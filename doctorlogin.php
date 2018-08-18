<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:health/addoctor.php');
}
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Login</title>
 <h4><a href="index.html" style="float:right; margin-right:50px; color:#514141; font-size:30px;">Home</a></h4>
<link href="css/style1.css" rel="stylesheet" type="text/css">
			<style type="text/css">
			body
			{
				background-repeat:no-repeat;
				background-size:cover;
				background-image:url('images/care5.jpg');
			}
			</style>
</head>
<body>
<div class="login">
<img src="health/image/doctor.jpg">
<h1 align="center">doctor Login</h1>
<form action="doctorlogin.php" method="post">
  <table align="center">
   <tr>
     <td>Doctorname</td><td><input type="text" name="docname" required></td>
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
		$docname=$_POST['docname'];
		$password=$_POST['pass'];
		
		$qry="SELECT * FROM `doctor` WHERE `docname`='$docname' AND `password`='$password';";
		$run= mysqli_query($con,$qry);
		$row= mysqli_num_rows($run);
		if($row <1)
		{
			?>
			<script>
			   alert('docname or Password not match!!'); 
			   window.open('doctorlogin.php','_self');
			 </script>
			 <?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			session_start();
			$_SESSION['uid']=$id;
			header('location:health/addoctor.php');
		}
			
	}
	?>