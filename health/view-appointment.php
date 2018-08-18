<?php
session_start();
include('../dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View Appointment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
							 <a href="patient.php" style="float:left; margin-right:30px; color:#342C46; font-size:20px;">Back</a>
										<h1 align="center">View Appointment</h1>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

								
										<thead>
											<table align="center" width="85%" border="5" style="margin-top:15;" >
		<tr style="background-color:#000; color:#fff;">
												<th class="center">#</th>
												<th>Specilization</th>
												<th class="hidden-xs">Pname</th>
												<th>Docfees</th>
												<th>Appointment Date </th>
												<th>PostingDate</th>
												<th>Appointment Time </th>
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($con,"select * from appointment");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['specilization'];?></td>
												<td><?php echo $row['pname'];?></td>
												<td><?php echo $row['docfees'];?></td>
												<td><?php echo $row['appdate'];?></td>
												<td ><?php echo $row['postingdate'];?></td>
												<td><?php echo $row['apptime'];?></td>
												<div class="visible-md visible-lg hidden-sm hidden-xs">
							
													
	
																				</div>
												</div></td>
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>

		</div>
		</table>
	</body>
</html>
