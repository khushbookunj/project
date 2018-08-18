<?php
session_start();
			if(isset($_SESSION['uid']))
			{
				echo "";
			}
			else
			{
				header('location:../login.php');
			}
 
?>
	<!DOCTYPE HTML>
			<html lang="en_US">
			<head>
			<meta charset="UTF-8">
			<title>Smart Health Cunsulting</title>
			<link href="../css/styles.css" rel="stylesheet" type="text/css">
			</head>
			<body bgcolor="#FFFF33">
	  <div class="patienttitle" align="center" height="1000px" width="100px;">
 		  <h4><a href="logout.php" style="float:right; margin-right:10px; color:#FFF; font-size:20px;">Logout</a></h4>
			   <h1>Welcome to Patient Registration</h1>
			  </div>
<form method="post" action="patient.php" enctype="multipart/form-data">
<table align="center"  border="1" width=70%;">
			<tr>
			<th>First Name:</th>
			<td><input type="text" name="fname" placeholder="Enter First Name" required></td>
</tr>
<tr>
<th>Last Name:</th><br>
<td><input type="text" name="lname" placeholder="Enter Last Name" required></td>
</tr>
<tr>
<th>Gender:</th><br>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<th>Date of Birth:</th><br>
<td><input type="date" name="dob" placeholder="dd/mm/yyyy" required></td>
</tr>
<tr>
<th>Address:</th><br>
<td><input type="text" name="address" placeholder="Address" required></td>
</tr>
<tr>
<th>Pincode:</th><br>
<td><input type="text" name="pincode" placeholder="Enter Pincode" required></td>
</tr>
<tr>
<th>Contact No:</th><br>
<td><input type="text" name="contact" placeholder="Enter Contact No" required></td>
</tr>
<tr>
<th>Password:</th><br>
<td><input type="password" name="psw" placeholder="Enter Password"></td>
</tr>
<tr>
<th>City:</th><br>
<td><input type="text" name="city" placeholder="Enter City"></td>
</tr>
<tr>
<th>Email:</th><br>
<td><input type="email" name="email" placeholder="Enter Email"></td>
</tr>
	<tr>
	<th>Blood Group:</th><br>
	<td><select name="bloodgroup">
	<option value="a+">A+</option>
	<option value="a-">A-</option>
	<option value="b+">B+</option>
	<option value="b-">B-</option>
	<option value="o+">O+</option>
	<option value="o-">O-</option>
	</select></td>
	</tr>
	<tr>
	<th>Weight in KG:</th><br>
	<td><input type="text" name="weight" placeholder="Enter Weight"></td>
	</tr>
	<tr>
	<th>Height in CM:</th><br>
	<td><input type="text" name="height" placeholder="Enter Height"></td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="Submit"></td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	

