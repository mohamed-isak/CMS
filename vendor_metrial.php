<?php
 include('db.php');
 include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Home</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
<style>
  
  .containerr {
width:300px;
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 12px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.containerr input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}
.checkmark2 {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}
/* On mouse-over, add a grey background color */
.containerr:hover input ~ .checkmark {
  background-color: #ccc;
}


/* When the checkbox is checked, add a blue background */
.containerr input:checked ~ .checkmark {
  background-color: #2196F3;
}
.containerr input:checked ~ .checkmark2 {
  background-color: #2196F3;
}


/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.containerr input:checked ~ .checkmark:after {
  display: block;
}
.containerr input:checked ~ .checkmark2:after {
  display: block;
}
/* Style the checkmark/indicator */
.containerr .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}.containerr .checkmark2:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.but{padding:5% 5%;
    margin:0.1px;
    float: ;
    height:100%;
    width:22%;} 


</style>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
         
            <!-- ========== Left Sidebar Start ========== -->
           <?php include('include/header.php');?> <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                              
                               
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-10">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                   
                                       
                      

                          
                              
<!----------------------------------------------------
    content of the add new
----------------------------------------------------->

<!-------------------------from php code----------------------------->
                                <?php
                             
                             if(isset($_POST['submit']))
                             { 


  
 
   
  
 

$name = $_POST['name'];
$cname = $_POST['cname'];
$pan = $_POST['pan'];
$gst=$_POST['gst'];
$spcbrd=$_POST['spcbrd'];
$checkbox1=$_POST['techno2']; 
$import=implode(',',$checkbox1);  

$checkbox2=$_POST['technos2'];  
$import2=implode(',',$checkbox2); 

   $checkbox3=$_POST['technoo2'];  
$import3=implode(',',$checkbox3); 

    $checkbox4=$_POST['technoos2'];  
 $import4=implode(',',$checkbox4); 
 

$sql = "insert into vendor_material (NAME,CNAME,PAN,GST,VENCAT,VSUBCAT,MATCAT,MSUBCAT,SPCBRD,STATUS) values ('$name','$cname','$pan','$gst','$import','$import2','$import3','$import4','$spcbrd','C')";
if (mysqli_query($connect, $sql))
 {
        echo "New record created successfully !";
 }  

     else 
     {
        echo "Error: " . $sql . "
" . mysqli_error($connect);
     }

}
?>
<!-------------------------------end------------------------------------->

<?php
$id=$_GET["id"];
 if($id==''){
?>
 


    <form    method="post" enctype="multipart/form-data">
    <div class="table-responsive">
     <table class="">
    
    <tr > <td ><label for="name" class="col-sm-12 col-form-label">NAME</label><input type="text" id="name" name="name"   class="form-control name_list"/></td>
   <td><label for="pan" class="col-sm-12 col-form-label">COMPANY NAME</label><input type="text" name="cname" id="pan" class="form-control name_list"></td><td>
     <label for="gst" class="col-sm-12 col-form-label">GST</label> <input type="text" name="gst"  class="form-control name_list"></td>
      

     </tr>
</table>
 

  <table class="">
    <tr><td>
        <h6>vendorcategory</h6>
  
<label id="workcategory"> 
  
</label>
 
 
<input type="text" class="form-control" name="sname" id="sname" autocomplete="off"> 
<select class="form-control" name="workcategory"  id="box"> 
<option >-Select-</option>
<?php 
$sql="select * from vendormaterial where role='main'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
  <option  style="font-size:16px;" class="<?php echo $ftv["Id"];?>" id="selectbox1" data-id="<?php echo $ftv["Id"];?>" class="form-control" value="<?php echo $ftv["workcategory"]; ?>"><?php echo $ftv["workcategory"]; ?></option>
<?php
}
?> 
 
</select>

</td>
<td>
         <h6>vendor-Sub-category</h6>
<label id="subcategory"> 
  
</label>

<input type="text" class="form-control" name="aname" id="aname" autocomplete="off"> 
<select class="form-control" name="subcategory" id="abox"> 
<option>-Select-</option>
	
</select>
 
 
</td></tr>
     </table>
     
	<table class="">
    <tr><td>
        <h6>Matirialcategory</h6>
  
<label id="mcategory"> 
  
</label>
 
 
<input type="text" class="form-control" name="tname" id="tname" autocomplete="off"> 
<select class="form-control" name="mcategory"  id="box2"> 
<option >-Select-</option>
<?php 
$sql="select * from materialcategory where role='main'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
  <option  style="font-size:16px;" class="<?php echo $ftv["Id"];?>" id="selectbox1" data-id="<?php echo $ftv["Id"];?>" class="form-control" value="<?php echo $ftv["workcategory"]; ?>"><?php echo $ftv["workcategory"]; ?></option>
<?php
}
?> 
 
</select>

</td>
<td>
         <h6>matirial-Sub-category</h6>
<label id="msubcategory"> 
  
</label>

<input type="text" class="form-control" name="aaname" id="bname" autocomplete="off"> 
<select class="form-control" name="subcategory" id="bbox"> 
<option>-Select-</option>
	
</select>
 
 
</td></tr>
     </table> 
	 
     
      <table class="">
    <tr><td><label for="pre" class="col-sm-12 col-form-label">PAN</label><input type="text" name="pan"  id="pre" class="form-control name_list"/></td>
    <td><label for="pres" class="col-sm-12 col-form-label">SPECIFIC BRANDS</label><input type="text" name="spcbrd" id="pres" class="form-control name_list"/></td>
  
  
    </table>
    
 
  </div>
  

<!----------------------------------------------------
    End now
----------------------------------------------------->


                         
           </div>
                
        
              
                      </div>
                                </div>
        <div class="col-2" >
                  <div class="card m-b-30"  >
                                    <div class="card-body" >
 
<button     class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button> 												
                               
                          <button    class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                              
                         <button type='submit' NAME="submit"  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button>
						 <a   href="vendor_metrial.php" class="form-control btn btn-primary waves-effect waves-light active  but"   id="addnew"><i class="fa fa-plus"></i></a>
 </br>
 </br>
 </br></div>
<div style="overflow-y:scroll;height:70vh;">
<?php
                  $sql="select * from vendor_material where STATUS='c' order by NAME";
                  $ex=mysqli_query($connect,$sql);
                  while($ftv=mysqli_fetch_assoc($ex))
				  {
                  ?>   
                     <a href="vendor_metrial.php?id=<?php echo $ftv['MID']; ?>"><p><?php echo $ftv["NAME"];?></p></a>
                   <?php
				  }
                   ?>
</div>
</div>
                            </div> <!-- end col -->
</form>
                        </div> <!-- end row -->      

                </div>
<?php
 }else{
?>
<!-- update Query -->
<?php
 if(isset($_POST['update']))
                 { 

$mid=$_GET["id"];
 
 


$name = $_POST['name'];
$cname = $_POST['cname'];
 
$pan = $_POST['pan'];
$gst=$_POST['gst'];
$spcbrd=$_POST['spcbrd'];

$checkbox1=$_POST['techno'];  
$import=implode(',',$checkbox1);  
    

$checkbox2=$_POST['techno2'];  
$import2=implode(',',$checkbox2);

  $checkbox3=$_POST['technos'];  
$import3=implode(',',$checkbox3);

   $checkbox4=$_POST['technos2'];  
$import4=implode(',',$checkbox4);

    $checkbox5=$_POST['technoo'];  
$import5=implode(',',$checkbox5);
 
    $checkbox6=$_POST['technoo2'];  
$import6=implode(',',$checkbox6);

$checkbox7=$_POST['technoos'];  
$import7=implode(',',$checkbox7);
 
$checkbox8=$_POST['technoos2'];  
$import8=implode(',',$checkbox8);
   
$bou_cat = $_POST['bou_cat'];
$Id=$_POST['Id'];
 
 


  
$sql ="UPDATE vendor_material SET NAME='$name',CNAME='$cname',VENCAT='$import,$import2',VSUBCAT='$import3,$import4',MATCAT='$import5,$import6',MSUBCAT='$import7,$import8	',PAN='$pan',GST='$gst',SPCBRD='$spcbrd' where MID='$mid'";
		
if (mysqli_query($connect, $sql))
 {
        echo "<p><i>New Record Updated Successfully!</i></p>";     
 } 
     else 
     {
        echo "Error: " . $sql . "
" . mysqli_error($connect);
     }

}
?>
<!-- delete query -->
<?php 

if(isset($_POST["delete1"])){
$Id=$_GET["id"];

$sql="update vendor_material set STATUS='D' where MID='$Id'";
$ex=mysqli_query($connect,$sql);
if($ex){
 
echo '<script>
 
window.location="vendor_metrial.php?msg=Deleted success";
 
 </script>';
}
}
?>



<?php
$id=$_GET["id"];

$sql="select * from   vendor_material where MID=$id and STATUS='C'";
$ex=mysqli_query($connect,$sql);
$ftv11=mysqli_fetch_assoc($ex);
?>

    <form    method="post" enctype="multipart/form-data">
    <div class="table-responsive">
	 
    <table class="">
   <tr><td><br><a href="doc.php?otid=<?php echo $id;?>&otid=vendor_material" class="btn btn-primary">Document</a></td></tr>
    </table><br><br>
    
     <table class="">
    
   
     
    </table>
    <table class="">
    <tr><td><label for="pan" class="col-sm-12 col-form-label">NAME</label><input type="text" name="name" value="<?php echo $ftv11["NAME"];?>" placeholder="Pan" class="form-control name_list"></td><td>
       <td><label for="pan" class="col-sm-12 col-form-label">COMPANY NAME</label><input type="text" name="cname" id="pan" value="<?php echo $ftv11["CNAME"];?>" class="form-control name_list"></td><td>
     <label for="gst" class="col-sm-12 col-form-label">GST</label> <input type="text" name="gst" value="<?php echo $ftv11["GST"];?>" class="form-control name_list"></td>
    </table>
 <table class="">
    <tr><td>
	<h6>vendorcategory</h6>
  <?php 
 $id=$_GET["id"];
$sql="select * from vendor_material where MID='$id'and STATUS='C'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
<label id="workcategory"> 
<?php
   
	    $a=$ftv["VENCAT"]; 
      $out=explode(',',$a);
       foreach($out as $v)
	   {?>
<label class="containerr"><?php echo $v ?>
  <input type="checkbox" checked ID="<?php echo $v; ?>"  name="techno[]" value="<?php echo $v; ?>">
  <button type="button" name="remove" id="'1'" style="padding:3px 5px;" class="btn btn-danger btn_remove_phone1">X</button><br>
  <span class="checkmark"></span>
</label>
 <?php   }	?>
</label>
<?php }?>
        <h6>vendorcategory</h6>
  
<label id="workcategory"> 
  
</label>	
 
 
<input type="text" class="form-control" name="sname" id="sname" autocomplete="off"> 
<select class="form-control" name="workcategory"  id="box"> 
<option >-Select-</option>
<?php 
$sql="select * from vendormaterial where role='main'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
  <option  style="font-size:16px;" class="<?php echo $ftv["Id"];?>" id="selectbox1" data-id="<?php echo $ftv["Id"];?>" class="form-control" value="<?php echo $ftv["workcategory"]; ?>"><?php echo $ftv["workcategory"]; ?></option>
<?php
}
?> 
 
</select>

</td>
<td>

<h6>Sub-category</h6>
		 <?php 
 $id=$_GET["id"];
$sql="select * from vendor_material where MID='$id'and STATUS='C'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){
	
?>
<label class="containerr">
<p>
 <?php
   
	    $a=$ftv["VSUBCAT"]; 
      $out=explode(',',$a);
       foreach($out as $v)
	   {?>
	   
	   <label class="containerr" id="row"><?php echo $v; ?>
  <input  type="checkbox" checked id="<?php echo $v; ?>" name="technos[]" value="<?php echo $v; ?>">
  <button type="button" name="remove" id="remove" style="padding:3px 5px;" class="btn btn-danger btn_remove">X</button><br>
  <span class="checkmark"></span>
</label>
	   
	   
	   
	   <?php   }	}?>
   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
</p>
</label>
 <h6>vendor-Sub-category</h6>
<label id="subcategory"> 
  
</label>

<input type="text" class="form-control" name="aname" id="aname" autocomplete="off"> 
<select class="form-control" name="subcategory" id="abox"> 
<option>-Select-</option>
	
</select>
 
 
</td></tr>
     </table>
	 <table class="">
    <tr><td>
	<h6>Matirialcategory</h6>
  <?php 
 $id=$_GET["id"];
$sql="select * from vendor_material where MID='$id'and STATUS='C'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
<label id="workcategory"> 
<?php
   
	    $a=$ftv["MATCAT"]; 
      $out=explode(',',$a);
       foreach($out as $v)
	   {?>
<label class="containerr"><?php echo $v ?>
  <input type="checkbox" checked ID="<?php echo $v; ?>"  name="technoo[]" value="<?php echo $v; ?>">
  <button type="button" name="remove" id="'1'" style="padding:3px 5px;" class="btn btn-danger btn_remove_phone1">X</button><br>
  <span class="checkmark"></span>
</label>
 <?php   }	?>
</label>
<?php }?>
        <h6>Matirialcategory</h6>
  
<label id="mcategory"> 
  
</label>
 
 
<input type="text" class="form-control" name="sname" id="tname" autocomplete="off"> 
<select class="form-control" name="mcategory"  id="box2"> 
<option >-Select-</option>
<?php 
$sql="select * from materialcategory where role='main'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
  <option  style="font-size:16px;" class="<?php echo $ftv["Id"];?>" id="selectbox1" data-id="<?php echo $ftv["Id"];?>" class="form-control" value="<?php echo $ftv["workcategory"]; ?>"><?php echo $ftv["workcategory"]; ?></option>
<?php
}
?> 
 
</select>

</td>
<td>

<h6>matirial-Sub-category</h6>
		 <?php 
 $id=$_GET["id"];
$sql="select * from vendor_material where MID='$id' and STATUS='C'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
<label class="containerr">
<p>
 <?php
   
	    $a=$ftv["MSUBCAT"]; 
      $out=explode(',',$a);
       foreach($out as $v)
	   {?>
	   
	   <label class="containerr" id="row"><?php echo $v; ?>
  <input  type="checkbox" checked id="<?php echo $v; ?>" name="technoos[]" value="<?php echo $v; ?>">
  <button type="button" name="remove" id="remove" style="padding:3px 5px;" class="btn btn-danger btn_remove">X</button><br>
  <span class="checkmark"></span>
</label>
	   
	   
	   
	   <?php   }	}?>
   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
</p>
</label>
         <h6>matirial-Sub-category</h6>
<label id="msubcategory"> 
  
</label>

<input type="text" class="form-control" name="aname" id="bname" autocomplete="off"> 
<select class="form-control" name="subcategory" id="bbox"> 
<option>-Select-</option>
	
</select>
 
 
</td></tr>
     </table> 
		   <table class="">
    <tr><td><label for="pre"  class="col-sm-12 col-form-label">PAN</label><input type="text" name="pan" value="<?php echo $ftv11["PAN"];?>" id="pre" class="form-control name_list"/></td>
    <td><label for="pres" class="col-sm-12 col-form-label">SPECIFIC BRANDS</label><input type="text" name="spcbrd" value="<?php echo $ftv11["SPCBRD"];?>" id="pres" class="form-control name_list"/></td>
  
  
    </table>
     
     
    
 
  </div>
 

<!----------------------------------------------------
    End now
----------------------------------------------------->


                         
           </div>
                
        
              
                      </div>
                                </div>
        <div class="col-2">
                  <div class="card m-b-30">
                                    <div class="card-body">
 
<button type='submit' name='delete1'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button> 												
                               
                          <button type='submit' name='update'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                              
                         <button    class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button>
						 <a   href="vendorlabour.php" class="form-control btn btn-primary waves-effect waves-light active  but"   id="addnew"><i class="fa fa-plus"></i></a>
 </br>
 </br>
 </br><?php
                  $sql="select * from  vendor_material where STATUS='c'  ORDER BY NAME";
                  $ex=mysqli_query($connect,$sql);
                  while($ftv=mysqli_fetch_assoc($ex))
				  {
                  ?>   
                     <a href="vendorlabour.php?id=<?php echo $ftv['VID']; ?>"><p><?php echo $ftv["NAME"];?></p></a>
                   <?php
				  }
                   ?>
</div>
</div>
                            </div> <!-- end col -->
 </form>
                        </div> <!-- end row -->      

                </div>

<?php
 }
?>
                <!-- content -->

                <footer class="footer">
                    © 2019 Copyrights <span class="d-none d-sm-inline-block">   </span>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>


<script>
 $(document).ready(function(){
 

  $("#sname").keyup(function(){
 
   var txt=$("#sname").val();
    if(txt!="")
    {
    $.post("search_main1.php",{s:txt},function(data){
     $("#box").html(data);
});
	}

  });
var i=1;
$("#box").change(function(){
 var t=$("#box").val();
 var name=t;
$("#workcategory").append('<label class="containerr" id="work'+i+'">'+name+'<input type="checkbox" ID="'+name+'"  name="techno2[]" value="'+name+'" checked><span class="checkmark" ></span><button type="button" style="float:right;" name="remove" id="'+i+'" class="btn-xsm btn-danger btn_remove_wrk">X</button></label>');
i++; 
});
 

 $(document).on('click', '.btn_remove_wrk', function(){
        var button_id = $(this).attr("id"); 
        $("#work"+button_id).remove();
   });



 $("#box").change(function(){
 var val=$("#box").val();
 
	$.ajax({
	type: "POST",
	url: "get_sub1.php",
	data:'w='+val,
	success: function(data){
		$("#abox").append(data);
	}
	});
	});

// for sub category


 $("#aname").keyup(function(){
   var val=$("#box").val();
 
 
   var txt=$("#aname").val();
    if(txt!="" && val!="")
    {
	$.post("search_sub1.php",{y:txt,a:val},function(data){
     $("#abox").html(data);
});
	}

  });
var j=1;
$("#abox").change(function(){
 var t=$("#abox").val();
 var name=t;
$("#subcategory").append('<label class="containerr" id="work1'+j+'">'+name+'<input type="checkbox" ID="'+name+'"  name="technos2[]" value="'+name+'" checked><span class="checkmark" ></span><button type="button" style="float:right;" name="remove" id="'+j+'" class="btn-xsm btn-danger btn_remove_sub">X</button></label>');
j++; 
});
 

 $(document).on('click', '.btn_remove_sub', function(){
        var button_id = $(this).attr("id"); 
        $("#work1"+button_id).remove();
   });
 


 $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $("#row"+button_id).remove();
   })







   });
</script>

<script>
 $(document).ready(function(){
 

  $("#tname").keyup(function(){
 
   var txt=$("#tname").val();
    if(txt!="")
    {
    $.post("search_main2.php",{t:txt},function(data){
     $("#box2").html(data);
});
	}

  });
var i=1;
$("#box2").change(function(){
 var t=$("#box2").val();
 var name=t;
$("#mcategory").append('<label class="containerr" id="work'+i+'">'+name+'<input type="checkbox" ID="'+name+'"  name="technoo2[]" value="'+name+'" checked><span class="checkmark" ></span><button type="button" style="float:right;" name="remove" id="'+i+'" class="btn-xsm btn-danger btn_remove_wrk2">X</button></label>');
i++; 
});
 

 $(document).on('click', '.btn_remove_wrk2', function(){
        var button_id = $(this).attr("id"); 
        $("#work"+button_id).remove();
   });



 $("#box2").change(function(){
 var val=$("#box2").val();
 
	$.ajax({
	type: "POST",
	url: "get_sub2.php",
	data:'x='+val,
	success: function(data){
		$("#abox2").append(data);
	}
	});
	});

// for sub category


 $("#bname").keyup(function(){
   var val=$("#box2").val();
 
 
   var txt=$("#bname").val();
    if(txt!="" && val!="")
    {
 $.post("search_sub2.php",{z:txt,b:val},function(data){
     $("#bbox").html(data);
});
	}

  });
var j=1;
$("#abox2").change(function(){
 var t=$("#abox2").val();
 var name=t;
$("#msubcategory").append('<label class="containerr" id="work1'+j+'">'+name+'<input type="checkbox" ID="'+name+'"  name="technoos2[]" value="'+name+'" checked><span class="checkmark" ></span><button type="button" style="float:right;" name="remove" id="'+j+'" class="btn-xsm btn-danger btn_remove_sub2">X</button></label>');
j++; 
});
 

 $(document).on('click', '.btn_remove_sub2', function(){
        var button_id = $(this).attr("id"); 
        $("#work1"+button_id).remove();
   });
 


 $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $("#row"+button_id).remove();
   })







   });
</script>
        <script>
$(document).ready(function(){

<?php
$id=$_GET["id"];
$sql="select * from vendormaterial where VID='$id' and STATUS='C'";
$ex=mysqli_query($connect,$sql);
$fetch=mysqli_fetch_assoc($ex);
$string=$fetch["WORK_CAT"];
$str_split=explode(",",$string);
?>
// for vendor category
<?php
$sql="select * from vendormaterial where role='main'";
$ex=mysqli_query($connect,$sql);
while($ftv1=mysqli_fetch_assoc($ex)){
$data=$ftv1["workcategory"];
?>
<?php
foreach($str_split as $v){ 
if($v==$data){
?>
 var id="<?php echo $v; ?>";
$("#"+id).prop('checked',true);
<?php
}}}
 
?>
//subcategory
<?php

$string1=$fetch["SUB_CAT"];
$str_split1=explode(",",$string1);
 
?>
<?php
$sql="select * from vendormaterial where role='branch'";
$ex=mysqli_query($connect,$sql);
while($ftv2=mysqli_fetch_assoc($ex)){
$data=$ftv2["workcategory"];
?>
<?php
foreach($str_split1 as $v){
if($v==$data){
?>
 var id1="<?php echo $v; ?>";
 
$("#"+id1).prop('checked',true);
 
<?php
}}}
 
?>
//vendor category
 
       

var i=0;
var j=0;
 
var MaxValue=5;

//add phone
 $('#addid').click(function(){
        i++;
        if(i<MaxValue)
    {
        $('#dynamic_field_id').append('<tr id="row_id'+i+'"><td><label for="id" class="col-sm-12 col-form-label">ID</label><input type="text" name="id'+i+'"   class="form-control name_list" required /></td><td><label for="main" class="col-sm-12 col-form-label">Main Categories</label><input type="text" name="Main'+i+'" id="main" class="form-control name_list" required /></td><td><label for="Sub" class="col-sm-12 col-form-label">Sub Categories</label><input type="text" name="Sub'+i+'"  id="Sub" class="form-control name_list" required /></td><td><label for="document" class="col-sm-12 col-form-label">Document</label><input type="file" name="idfile1'+i+'" id="document" class="form-control name_list"></td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_id">X</button></td></tr>');
     }
    });
// add broucher
 $('#addbro').click(function(){
        j++;
        if(j<MaxValue)
    {  
        $('#dynamic_field_bro').append('<tr id="row_bro'+j+'"><td><label for="bro" class="col-sm-12 col-form-label">Broucher</label><input type="text" name="bro'+j+'"   class="form-control name_list" required /></td><td><label for="main1" class="col-sm-12 col-form-label">Main Categories</label><input type="text" name="Main'+2+''+j+'" id="main" class="form-control name_list" required /></td><td><label for="Sub1" class="col-sm-12 col-form-label">Sub Categories</label><input type="text" name="Sub'+2+''+j+'"  id="Sub" class="form-control name_list" required /></td><td><label for="document2" class="col-sm-12 col-form-label">Document</label><input type="file" name="brofile2'+j+'" id="document" class="form-control name_list" /></td><td ><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_bro">X</button></td></tr>');
     }
    });
 
 
    $(document).on('click', '.btn_remove_id', function(){
        var button_id = $(this).attr("id"); 
       if(i>=1 ){
          i--;
       }
        $('#row_id'+button_id+'').remove();
         if(i>=1){
         i--;
	   }
          i=1;
    });
    $(document).on('click', '.btn_remove_bro', function(){
        var button_id = $(this).attr("id"); 
       if(j>=1 ){
        j--;
       }
        $('#row_bro'+button_id+'').remove();
         if(j>=1){
         j--;
	   }
          j=1;
    });
  
});
</script>

<script>
$(document).ready(function(){
var i=1;
var j=1;
var k=1;
var l=1;


var x=1;
var y=1;
var z=1;
var u=1;








var MaxValue=5;
<?php
$id=$_GET["id"];
$sql="select * from vendor_reg_lab where VID=$id and STATUS='C'";
$ex=mysqli_query($connect,$sql);
$ftv5=mysqli_fetch_assoc($ex);
?>

//get phone 
 var phone3="<?php echo $ftv5["PHONE3"];?>";
 var phone4="<?php echo $ftv5["PHONE4"];?>";
 var phone5="<?php echo $ftv5["PHONE5"];?>";
 var phone6="<?php echo $ftv5["PHONE6"];?>";
 var phone7="<?php echo $ftv5["PHONE7"];?>";
 var phone8="<?php echo $ftv5["PHONE8"];?>";

// get address

 var address3="<?php echo $ftv5["ADDRESS3"];?>";
 var address4="<?php echo $ftv5["ADDRESS4"];?>";
 var address5="<?php echo $ftv5["ADDRESS5"];?>";
 var address6="<?php echo $ftv5["ADDRESS6"];?>";
 var address7="<?php echo $ftv5["ADDRESS7"];?>";
 var address8="<?php echo $ftv5["ADDRESS8"];?>";


//get Email

 var email3="<?php echo $ftv5["EMAIL3"];?>";
 var email4="<?php echo $ftv5["EMAIL4"];?>";
 var email5="<?php echo $ftv5["EMAIL5"];?>";
 var email6="<?php echo $ftv5["EMAIL6"];?>";
 var email7="<?php echo $ftv5["EMAIL7"];?>";
 var email8="<?php echo $ftv5["EMAIL8"];?>";

// get Events

 var events3="<?php echo $ftv5["EVENT3"];?>";
 var events4="<?php echo $ftv5["EVENT4"];?>";
 var events5="<?php echo $ftv5["EVENT5"];?>";
 var events6="<?php echo $ftv5["EVENT6"];?>";
 var events7="<?php echo $ftv5["EVENT7"];?>";
 var events8="<?php echo $ftv5["EVENT8"];?>";



if(x==1){
     i++;
	$('#dynamic_field_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone3+'"    placeholder="Phone" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone4+'" placeholder="Phone" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
	}
 if(x==1)
    {
   i++;
    $('#dynamic_field_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone5+'"    placeholder="Phone" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone6+'" placeholder="Phone" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
}
if(x==1){
i++;
    $('#dynamic_field_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone7+'"    placeholder="Phone" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone8+'" placeholder="Phone" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
    
     }



if(y==1){
 j++;
        $('#dynamic_field_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="Address" class="form-control name_list" >'+address3+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="Address" class="form-control name_list" >'+address4+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
}
 if(y==1)
{
 j++;
$('#dynamic_field_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="Address" class="form-control name_list" >'+address5+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="Address" class="form-control name_list" >'+address6+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
}
if(y==13){
j++;
$('#dynamic_field_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="Address" class="form-control name_list" >'+address7+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="Address" class="form-control name_list" >'+address8+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
    
 }


 if(z==1){
     k++;
        $('#dynamic_field_email1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="E-mail" value="'+email3+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email4+'" placeholder="E-mail" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
    
 }
if(z==1){
    k++;
        $('#dynamic_field_email1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="E-mail" value="'+email5+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email6+'" placeholder="E-mail" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
}
if(z==1){
  k++;
        $('#dynamic_field_email1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="E-mail" value="'+email7+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email8+'" placeholder="E-mail" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
	
  }

     if(u==1){
    l++;
        $('#dynamic_field_events1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events3+'" placeholder="Events" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events4+'" placeholder="Events" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
   
 }
if(u==1){
 l++;
        $('#dynamic_field_events1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events5+'" placeholder="Events" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events6+'" placeholder="Events" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
     
}
if(u==1){
l++;
        $('#dynamic_field_events1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events7+'" placeholder="Events" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events8+'" placeholder="Events" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');

}

//add phone
 $('#addphone1').click(function(){
        i++;
        if(i<MaxValue)
    { 
    if(x==1){
	$('#dynamic_field_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone3+'"    placeholder="Phone" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone4+'" placeholder="Phone" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
     x++;
	}else if(x==2)
    {
    $('#dynamic_field_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone5+'"    placeholder="Phone" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone6+'" placeholder="Phone" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
	x++;
}else if(x==3){
    $('#dynamic_field_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone7+'"    placeholder="Phone" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone8+'" placeholder="Phone" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
    x++;
     }
 }
    });
// add address
 $('#addaddress1').click(function(){
        j++;
        if(j<MaxValue)
    {
    if(y==1){
        $('#dynamic_field_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="Address" class="form-control name_list" >'+address3+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="Address" class="form-control name_list" >'+address4+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
     y++;
}
     else if(y==2)
	 {
$('#dynamic_field_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="Address" class="form-control name_list" >'+address5+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="Address" class="form-control name_list" >'+address6+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
     y++;
}else if(y==3){
$('#dynamic_field_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="Address" class="form-control name_list" >'+address7+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="Address" class="form-control name_list" >'+address8+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
    y++;
 }
 }
    });
// add email
 $('#addmail1').click(function(){
        k++;
        if(k<MaxValue)
    {
         if(z==1){
        $('#dynamic_field_email1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="E-mail" value="'+email3+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email4+'" placeholder="E-mail" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
    z++;
 }else if(z==2){
        $('#dynamic_field_email1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="E-mail" value="'+email5+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email6+'" placeholder="E-mail" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
     z++;
}else if(z==3){
        $('#dynamic_field_email1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="E-mail" value="'+email7+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email8+'" placeholder="E-mail" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
	 z++;
  }
	}
    });
// add events
 $('#addevents1').click(function(){
        l++;
        if(l<MaxValue)
    {
     if(u==1){
        $('#dynamic_field_events1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events3+'" placeholder="Events" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events4+'" placeholder="Events" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
    u++;
 }
else if(u==2){
        $('#dynamic_field_events1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events5+'" placeholder="Events" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events6+'" placeholder="Events" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
     u++;
}
else if(u==3){
        $('#dynamic_field_events1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events7+'" placeholder="Events" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events8+'" placeholder="Events" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
u++;
}
	}
    });
    $(document).on('click', '.btn_remove_phone1', function(){
        var button_id = $(this).attr("id"); 
       if(i>=1 ){
          i--;
         x=1;
       }
        $('#row_phone'+button_id+'').remove();
         if(i>=1){
         i--;
          x=1;
	   }
          i=1;
    });
    $(document).on('click', '.btn_remove_address1', function(){
        var button_id = $(this).attr("id"); 
       if(j>=1 ){
        j--;
        y=1;
       }
        $('#row_address'+button_id+'').remove();
         if(j>=1){
         j--;
        y=1;
	   }
          j=1;
    });
 $(document).on('click', '.btn_remove_email1', function(){
        var button_id = $(this).attr("id"); 
       if(k>=1 ){
        k--;
         z=1;
       }
        $('#row_email'+button_id+'').remove();
         if(k>=1){
         k--;
        z=1;
	   }
          k=1;
    });
$(document).on('click', '.btn_remove_events1', function(){
        var button_id = $(this).attr("id"); 
       if(l>=1 ){
        l--;
           u=1;
       }
        $('#row_email'+button_id+'').remove();
         if(l>=1){
         l--;
         u=1;
	   }
          l=1;
    });

 $(".search").keyup(function(){
 alert("hi");
   var txt=$("#search").val();
    if(txt!="")
    {
    $.post("get_work.php",{s:txt},function(data){
     $("#workcategory").html(data);
	}
	)};
 });
});















        </script>
    </body>

</html>


