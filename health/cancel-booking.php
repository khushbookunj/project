 <?php
              session_start();
			  if(isset($_SESSION['uid']))
			{
				echo "";
			}
			
			?>
			
			<table align="center">
			<form action="cancel-booking.php" method="post">
			<a href="patient.php" style="float:right; margin-right:30px; color:#342C46; font-size:20px;">Back</a>
			<tr>
			<th>Patient Name</th>
			
			
			
			<td><input type="text" name="pname" placeholder="Enter Patient Name" required="required" /></td>
			
			<td colspan="2"><input type="submit" name="submit" value="Search" /></td>
			</tr>
			
			</form>
			</table>
			
			<table align="center" width="80%" border="1" style="margin-top:10px">
		<tr style="background-color:#000; color:#fff;">  
		                                    <th>Patient Id</th>
												<th>Specilization</th>
												<th>Patient Name</th>
												<th>Doctor Fee</th>
												<th>Appointment Date</th>
												<th>Appointment Posting Date</th>
												<th>Appointment Time</th>
			                                    <th>Action</th>
		</tr>
			
			<?php
			if(isset($_POST['submit']))
			{
				include('../dbcon.php');
				
				
				$pname=$_POST['pname'];
				
				$sql="SELECT * FROM `appointment` WHERE `pname` LIKE '$pname'";
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
												<td><?php echo $data['pname'];?></td>
												<td><?php echo $data['docfees'];?></td>
												<td><?php echo $data['appdate'];?></td>
												<td><?php echo $data['postingdate'];?></td> 
												<td><?php echo $data['apptime'];?></td>
			              <td><a href="deleteform.php?uid=<?php echo $data['id'];?>">cancel-booking</a></td>
		                </tr>
						<?php
					}
				}
			}
			?>
			
			</table>
			
			