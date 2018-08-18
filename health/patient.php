<html>
<head>
<script type="text/javascript" scr="js/loadPage.js"></script>
<script type="text/javascript" scr="js/changedropdown.js"></script>
<meta name="viewport" Content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main_wrapper">
<div class="header_wrapper">
<img src="../images/care3.jpg" style="width:1200px; height:500px;">
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
		include('../dbcon.php');
	
	     if(isset($_POST['submit']))
	{
	          $fname= $_POST['fname'];
				$lname= $_POST['lname']; 
				$gender= $_POST['gender'];
				$dob= $_POST['dob'];
				$address= $_POST['address'];
			$pincode=$_POST['pincode'];
			$contact=$_POST['contact'];
			$psw= $_POST['psw'];
			$city= $_POST['city'];
			$email= $_POST['email'];
			$bloodgroup= $_POST['bloodgroup'];
			$weight= $_POST['weight'];
			$height= $_POST['height'];
				$qry="INSERT INTO `pdetail`(`fname`, `lname`, `gender`, `dob`, `address`, `pincode`, `contact`, `psw`, `city`, `email`, `bloodgroup`, `weight`, `height`) VALUES ('$fname','$lname','$gender','$dob','$address','$pincode','$contact','$psw','$city','$email','$bloodgroup','$weight','$height')";
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