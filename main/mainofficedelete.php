
<?php
include("db.php");
$dlt = $_REQUEST['dlt']; 

$deleteqry="DELETE FROM mainoffice WHERE id='$dlt' ";
	  $deleteres = mysqli_query($connect, $deleteqry);
	 
	    if ($deleteres)   
		 {
		     	echo'<script>
  window.location= "mainoffice.php?msg=Deleted Successfully";
</script>';
			// header("location:indexbanner.php?msg=Deleted Successfully");
		 }  
		 else
		 {
		     	echo'<script>
  window.location= "mainoffice.php?msg=Deletion Error";
</script>';
		//	header("location:aboutbanner.php?msg=Deletion Error");
		 }
	   

	   

?>
