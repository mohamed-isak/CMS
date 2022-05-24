<?php
include("db.php");
if(!empty($_POST["work_id"])) 
{$id=$_POST["work_id"];
$query =mysqli_query($connect,"SELECT distinct(workcategory) FROM specification WHERE work='$id'");
?> 				                                                             
<option value="">Select Work Category</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["workcategory"]; ?>"><?php echo $row["workcategory"]; ?></option>
<?php
}?><?php
}
?>