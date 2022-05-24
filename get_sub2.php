<?php
 include('db.php');
 ?>
<?php
if(isset($_POST["x"])){
$sql="select * from materialcategory where workcategory='{$_POST["x"]}'";
$ex=mysqli_query($connect,$sql);
$ftv=mysqli_fetch_assoc($ex);
$Id=$ftv["Id"];

$sql1="select * from materialcategory where main='{$Id}' and role='branch'";
$ex1=mysqli_query($connect,$sql1);
?>

 
<?php
while($ftv1=mysqli_fetch_assoc($ex1)){
?>
 <option  style="font-size:16px;" id="work" class="form-control" value="<?php echo $ftv1["workcategory"]; ?>"><?php echo $ftv1["workcategory"]; ?></option>
<?php
}
}
?>