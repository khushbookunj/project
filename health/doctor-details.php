<html>
<head>
<script type="text/javascript" scr="js/loadPage.js"></script>
<script type="text/javascript" scr="js/changedropdown.js"></script>
<meta name="viewport" Content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main_wrapper">
<div class="header_wrapper">
<img src="image/health.jpg" style="width:1200px; height:500px;">
</div>

<div id="navbar">
<ul id="menu">
<li><a href="showdetails.php">My Details</a></li>
<li><a href="book-appointment.php">Book Appointment</a></li>
<li><a href="view-appointment.php">View Appointment</a></li>
<li><a href="cancel-booking.php">Cancel Booking</a></li>
<li><a href="doctor-details.php">Search Doctor</a></li>
<li><a href="registration.php">Back</a></li>
</ul>

</div>

</div>

</body>
</html>
<?php
              session_start();
			  if(isset($_SESSION['uid']))
			{
				echo "";
			}
			else
			{
				header('location: ../login.php');
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
			<table align="center" style="margin-top:15px; margin-left:180px">
			<form action="Doctor-details.php" method="post">
			<tr>
			<th>Enter Doctor Name<th>
			<td><input type="text" name="docname" placeholder="Enter Doctor Name" required="required" /></td>
			
			<td colspan="2"><input type="submit" name="submit" value="Search" /></td>
			</tr>
			</form>
			</table>
			
			<table align="center" width="80%" border="2" style="margin-top:15px; margin-left:140px" >
		<tr style="background-color:#000; color:#fff;">  
			<th>Doctor Id</th>
			<th>Specilization</th>
			<th>Doctor Name</th>
			<th>Address</th>
			<th>Doctor Fees</th>
			<th>Contact No</th>
			<th>Email Id</th>
		</tr>
			<?php
			if(isset($_POST['submit']))
			{
				include('../dbcon.php');
				
				$docname=$_POST['docname'];
				
				$sql="SELECT * FROM `doctor` WHERE `docname` LIKE '%$docname%'";
				$run=mysqli_query($con,$sql);
				
				if(mysqli_num_rows($run)<1)
				{
					echo "<tr colspan='5'><td>No Records Found</td></tr>";
				}
				else
				{
					$count=0;
					while($data=mysqli_fetch_assoc($run))
					{
						$count++;
						?>
						<tr align="center">  
			              <td><?php echo $count; ?></td>
			             
						 <td><?php echo $data['specilization'];?></td>
                          <td><?php echo $data['docname'];?></td>
                              <td><?php echo $data['address'];?></td>
                             <td><?php echo $data['docfees'];?></td>
                                 <td><?php echo $data['contactno'];?></td>
                              <td><?php echo $data['docemail'];?></td>
			              
		                </tr>
						<?php
					}
				}
			}
			?>
			
			</table>
			
			