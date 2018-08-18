<?php
include('../dbcon.php');
if(!empty($_POST["specilizationid"])) 
{
 $sql=mysqli_query($con,"select docname,id from doctor where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Doctor </option>
  <?php
 while($row=mysqli_fetch_array($sql))
 	{?>

  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['docname']); ?></option>
   <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <?php
}
}
if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select docfees from doctor where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docfees']); ?>"><?php echo htmlentities($row['docfees']); ?></option>
  <?php
}
}

?>

