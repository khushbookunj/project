          <?php
             include('../dbcon.php');
			 		$id=$_REQUEST['uid'];	 
             
				$qry="DELETE FROM `appointment` WHERE `id`='$id';";
				$run= mysqli_query($con,$qry);
                 if($run == TRUE)			
				
				{
					?>
					<script>
					 alert('Data deleted successfully.');
					 window.open('cancel-booking.php','_self');
					</script>
					<?php
				}
			 
             ?> 