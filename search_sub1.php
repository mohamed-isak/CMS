<?php
 include('db.php');
 ?>
 <?php
 if(isset($_POST["y"])){$sql="select * from vendormaterial where workcategory='{$_POST["a"]}' ";
$ex=mysqli_query($connect,$sql);
$ftv1=mysqli_fetch_assoc($ex);
$id=$ftv1["Id"];
?><option>-Select-</option><?php
$sql1="select * from vendormaterial where workcategory like'{$_POST["y"]}%' and role='branch' and main='$id' ";
$ex1=mysqli_query($connect,$sql1);
while($ftv=mysqli_fetch_assoc($ex1)){
?>
  <option  style="font-size:16px;" id="work" class="form-control" value="<?php echo $ftv["workcategory"]; ?>"><?php echo $ftv["workcategory"]; ?></option>
  <?php
 }
 }
?>



 
 