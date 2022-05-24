<?php
 include('db.php');
 ?>
 <?php
 if(isset($_POST["t"])){
$sql="select * from  materialcategory where workcategory like'{$_POST["t"]}%' and role='main' ";
$ex=mysqli_query($connect,$sql);
?>
<option>-Select-</option>
<?php
while($ftv=mysqli_fetch_assoc($ex)){
?>
  <option  style="font-size:16px;" id="work" class="form-control" value="<?php echo $ftv["workcategory"]; ?>"><?php echo $ftv["workcategory"]; ?></option>
  <?php
 }
 }
?>



 
 