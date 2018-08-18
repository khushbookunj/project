   <?php
              session_start();
			  if(isset($_SESSION['uid']))
			{
				echo "";
			}
			else
			{
				header('location:../doctorlogin.php');
			}
			?>
<html>
<head>
<title>Addoctor</title>
<link href=".../css/styles.css" rel="stylesheet" type="text/css">
			</head>
			<body bgcolor="#D97878">
	  <div class="patienttitle" align="center" height="1000px" width="100px;">
 		  <h4><a href="appointment-history.php" style="float:right; margin-right:10px; color:#514141; font-size:20px;">appointment-history</a></h4>
			  <h4><a href="../index.html" style="float:left; margin-left:20px; color:#514141; font-size:24px;">Back</a></h4>
			  <h1>Doctor Dashboard</h1>
			  </div>
			
			<form method="post" action="addoctor.php" enctype="multipart/form-data">
			<table align="center"  border="1" width=60%; color="#D7AC70">
			<tr>
															
															<th>Doctor Specilization:</th>
															
							<td><select name="specilization" class="form-control" required="required">
															
                                                                <option value="pathologist">Pathologist</option>
                                                                <option value="plastic surgeon">Plastic Surgeon</option>
																 <option value="podiatrist">Podiatrist</option>
																  <option value="psychiatrist">Psychiatrist</option>
																   <option value="radiation onconlogist">Radiation Onconlogist</option>
																    <option value="diagnostic radiologist">Diagnostic Radiologist</option>
																	 <option value="urologist">Urologist</option>
																	  <option value="neurosurgeon">Neurosurgeon</option>
																	   <option value="gynecologist">Gynecologist</option>
																	    <option value="cardiologist">Cardiologist</option>
																		 <option value="hematologist">Hematologist</option>
																		  <option value="orthopaidic surgeon">Orthopaidic Surgeon</option>
																
																</select></td>
																</tr>
														

<tr>
															
																<th> Doctor Name:</th>
															
					<td><input type="text" name="docname" class="form-control"  placeholder="Enter Doctor Name"></td>
														
</tr>

<tr>
															
																<th> Address:</th>
															
				<td>	<input type="text" name="address" class="form-control"  placeholder="Enter Doctor Address"></td>
														</tr>
<tr>
															
																<th> Doctor Consultancy Fees:</th>
															
					<td><input type="text" name="docfees" class="form-control"  placeholder="Enter Doctor Consultancy Fees"></td>
														</tr>
	
<tr>
																<th> Doctor Contact no:</th>
															
				<td>	<input type="text" name="contactno" class="form-control"  placeholder="Enter Doctor Contact no"></td>
														
</tr>
<tr>
															<th>	 Doctor Email:</th>
															
					<td><input type="email" name="docemail" class="form-control"  placeholder="Enter Doctor Email id"></td>
														</tr>



														
														<tr>
																<th> Password:</th>
														
					<td><input type="password" name="pass" placeholder="Password" required="required"></td>
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
			include('../dbcon.php');
			
			if(isset($_POST['submit']))
			{
				$specilization=$_POST['specilization'];
$docname=$_POST['docname'];
$address=$_POST['address'];
$docfees=$_POST['docfees'];
$contactno=$_POST['contactno'];
$docemail=$_POST['docemail'];
$password=$_POST['pass'];

$qry="insert into `doctor`(`specilization`,`docname`,`address`,`docfees`,`contactno`,`docemail`,`password`) values('$specilization','$docname','$address','$docfees','$contactno','$docemail','$password')";
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