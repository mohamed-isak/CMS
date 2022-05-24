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
  
  .containerr {width:300px;
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
}.but{padding:5% 5%;
    margin:0.1px;
    float: ;    height:100%;
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
                             { // Get Phone Number
   $Number1=$_POST["id"];
   $Number2= $_POST["id1"];
   $Number3= $_POST["id2"];
   $Number4= $_POST["id3"];
   $Number5= $_POST["id4"];
 
  
 // Get Address
 $Main1= $_POST["Main"];
   $Main2= $_POST["Main1"];
   $Main3= $_POST["Main2"];
   $Main4= $_POST["Main3"];
   $Main5= $_POST["Main4"];
 
   
 // Get mails
 $Sub1=$_POST["Sub"];
   $Sub2= $_POST["Sub1"];
   $Sub3= $_POST["Sub2"];
   $Sub4= $_POST["Sub3"];
   $Sub5= $_POST["Sub4"];
 // for broucher// Get Phone Number
   $BRO1=$_POST["bro"];
   $BRO2=$_POST["bro1"];
   $BRO3= $_POST["bro2"];
   $BRO4= $_POST["bro3"];
   $BRO5= $_POST["bro4"];
  
 
  
 // Get Address
 $Main11= $_POST["Mains2"];
   $Main21= $_POST["Main21"];
   $Main31= $_POST["Main22"];
   $Main41= $_POST["Main23"];
   $Main51= $_POST["Main24"];
 
   
 // Get mails
 $Sub11=$_POST["Subs2"];
   $Sub21= $_POST["Sub21"];
   $Sub31= $_POST["Sub22"];
   $Sub41= $_POST["Sub23"];
   $Sub51= $_POST["Sub24"];  
  
 
$name = $_POST['name'];
 $prewrk= $_POST['pre'];
 $preswrk= $_POST['pres'];
 $ref= $_POST['ref'];
$pan = $_POST['pan'];
$ins=$_POST['Insurance'];
$gst=$_POST['gst'];
$checkbox1=$_POST['techno'];  
$import=implode(',',$checkbox1);   

$checkbox2=$_POST['technos'];  
$import2=implode(',',$checkbox2); 
 
$bou_cat = $_POST['bou_cat'];$random1=rand(0,10000);
 // insert id images 
$target_dir1="upload/IDDOC/";
$target_file1=$target_dir1.$random1.basename($_FILES["idfile1"]["name"]);
$target_file2=$target_dir1.$random1.basename($_FILES["idfile11"]["name"]);
$target_file3=$target_dir1.$random1.basename($_FILES["idfile12"]["name"]);
$target_file4=$target_dir1.$random1.basename($_FILES["idfile13"]["name"]);
$target_file5=$target_dir1.$random1.basename($_FILES["idfile14"]["name"]);move_uploaded_file($_FILES["idfile1"]["tmp_name"],$target_file1); move_uploaded_file($_FILES["idfile11"]["tmp_name"],$target_file2); move_uploaded_file($_FILES["idfile12"]["tmp_name"],$target_file3) ;move_uploaded_file($_FILES["idfile13"]["tmp_name"],$target_file4) ;move_uploaded_file($_FILES["idfile14"]["tmp_name"],$target_file5);// insert boucher images$target_dir2="upload/BOUCHDOC/";
$target_file11=$target_dir2.$random1.basename($_FILES["brofile2"]["name"]);
$target_file21=$target_dir2.$random1.basename($_FILES["brofile21"]["name"]);
$target_file31=$target_dir2.$random1.basename($_FILES["brofile22"]["name"]);
$target_file41=$target_dir2.$random1.basename($_FILES["brofile23"]["name"]);
$target_file51=$target_dir2.$random1.basename($_FILES["brofile24"]["name"]);

move_uploaded_file($_FILES["brofile2"]["tmp_name"],$target_file11);
move_uploaded_file($_FILES["brofile21"]["tmp_name"],$target_file21);
move_uploaded_file($_FILES["brofile22"]["tmp_name"],$target_file31) ;
move_uploaded_file($_FILES["brofile23"]["tmp_name"],$target_file41) ;
move_uploaded_file($_FILES["brofile24"]["tmp_name"],$target_file51);
if($target_dir1 && $target_dir2) 
{
$sql = "insert into vendor_reg_lab (NAME,ID1,ID2,ID3,ID4,ID5,ID_MAIN_CAT1,ID_MAIN_CAT2,ID_MAIN_CAT3,ID_MAIN_CAT4,ID_MAIN_CAT5,ID_SUB_CAT1,ID_SUB_CAT2,ID_SUB_CAT3,ID_SUB_CAT4,ID_SUB_CAT5,ID_DOCUMENT1,ID_DOCUMENT2,ID_DOCUMENT3,ID_DOCUMENT4,ID_DOCUMENT5,PAN,GST,WORK_CAT,SUB_CAT,PREVIOUS_WRK,PRESENT_WRK,REFERENCE,BRO1,BRO2,BRO3,BRO4,BRO5,BRO_MAIN_CAT1,BRO_MAIN_CAT2,BRO_MAIN_CAT3,BRO_MAIN_CAT4,BRO_MAIN_CAT5,BRO_SUB_CAT1,BRO_SUB_CAT2,BRO_SUB_CAT3,BRO_SUB_CAT4,BRO_SUB_CAT5,BRO_DOCUMENT1,BRO_DOCUMENT2,BRO_DOCUMENT3,BRO_DOCUMENT4,BRO_DOCUMENT5,STATUS) 
values ('$name','$Number1','$Number2', '$Number3','$Number4','$Number5','$Main1','$Main2','$Main3','$Main4','$Main5','$Sub1','$Sub2','$Sub3','$Sub4','$Sub5','$target_file1','$target_file2','$target_file3','$target_file4','$target_file5','$pan','$gst','$import','$import2','$prewrk','$preswrk','$ref','$BRO1','$BRO2','$BRO3','$BRO4','$BRO5','$Main11','$Main21','$Main31','$Main41','$Main51','$Sub11','$Sub21','$Sub31','$Sub41','$Sub51','$target_file11','$target_file21','$target_file31','$target_file41','$target_file51','c')";
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
    
    <tr > <td ><label for="name" class="col-sm-12 col-form-label">NAME</label><input type="text" id="name" name="name"   class="form-control name_list"/></td>   <td><label for="pan" class="col-sm-12 col-form-label">PAN</label><input type="text" name="pan" id="pan" class="form-control name_list"></td><td>
     <label for="gst" class="col-sm-12 col-form-label">GST</label> <input type="text" name="gst"  class="form-control name_list"></td>
      

     </tr></table> 

     <table class="">
    <tr><td>
        <h6>Work-category</h6>  
<label id="workcategory"> 
  
</label>  <input type="text" class="form-control" name="sname" id="sname" autocomplete="off"> 
<select class="form-control" name="workcategory"  id="box"> <option >-Select-</option><?php $sql="select * from workcategory where role='main'";
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
         <h6>Sub-category</h6><label id="subcategory"> 
  
</label><input type="text" class="form-control" name="aname" id="aname" autocomplete="off"> 
<select class="form-control" name="subcategory" id="abox"> <option>-Select-</option>	</select> 
 
</td></tr>
     </table>
     
      <table class="">
    <tr><td><label for="pre" class="col-sm-12 col-form-label">Previous Work</label><input type="text" name="pre"  id="pre" class="form-control name_list"/></td>
    <td><label for="pres" class="col-sm-12 col-form-label">Present Work</label><input type="text" name="pres" id="pres" class="form-control name_list"/></td>
  <td><label for="ref" class="col-sm-12 col-form-label">Reference</label><input type="text" name="ref" id="ref"  class="form-control name_list"/></td></tr>
  
    </table>
    
 
  </div>
  

<!----------------------------------------------------
    End now
----------------------------------------------------->


                         
           </div>
                
        
              
                      </div>
                                </div>        <div class="col-2" >
                  <div class="card m-b-30"  >
                                    <div class="card-body" >
 
<button     class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button> 												
                               
                          <button    class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                              
                         <button type='submit' NAME="submit"  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button>
						 <a   href="vendorlabour.php" class="form-control btn btn-primary waves-effect waves-light active  but"   id="addnew"><i class="fa fa-plus"></i></a>
 </br>
 </br>
 </br></div><div style="overflow-y:scroll;height:70vh;"><?php
                  $sql="select * from vendor_reg_lab where STATUS='c' order by NAME";
                  $ex=mysqli_query($connect,$sql);
                  while($ftv=mysqli_fetch_assoc($ex))
				  {
                  ?>   
                     <a href="vendorlabour.php?id=<?php echo $ftv['VID']; ?>"><p><?php echo $ftv["NAME"];?></p></a>
                   <?php
				  }
                   ?></div>
</div>
                            </div> <!-- end col --></form>
                        </div> <!-- end row -->      

                </div><?php
 }else{
?><!-- update Query -->
<?php
 if(isset($_POST['update']))
                 { 

$mid=$_GET["id"];
 
 
// Get Phone Number
   $Number1=$_POST["number1"];
   $Number2= $_POST["number11"];
   $Number3= $_POST["number2"];
   $Number4= $_POST["number21"];
   $Number5= $_POST["number3"];
   $Number6= $_POST["number31"];
   $Number7= $_POST["number4"];
   $Number8= $_POST["number41"];
   
 // Get Address
 $Address1= $_POST["address1"];
   $Address2= $_POST["address11"];
   $Address3= $_POST["address2"];
   $Address4= $_POST["address21"];
   $Address5= $_POST["address3"];
   $Address6= $_POST["address31"];
   $Address7= $_POST["address4"];
   $Address8= $_POST["address41"];
   
 // Get mails
 $Mail1=$_POST["email1"];
   $Mail2= $_POST["email11"];
   $Mail3= $_POST["email2"];
   $Mail4= $_POST["email21"];
   $Mail5= $_POST["email3"];
   $Mail6= $_POST["email31"];
   $Mail7= $_POST["email4"];
   $Mail8= $_POST["email41"];
  
// Get Events
 $Event1=$_POST["events1"];
   $Event2= $_POST["events11"];
   $Event3= $_POST["events2"];
   $Event4= $_POST["events21"];
   $Event5= $_POST["events3"];
   $Event6= $_POST["events31"];
   $Event7= $_POST["events4"];
   $Event8= $_POST["events41"];
 


$name = $_POST['name'];
 $prewrk= $_POST['pre'];
 $preswrk= $_POST['pres'];
 $Ref= $_POST['ref'];
$pan = $_POST['pan'];
$ins=$_POST['Insurance'];
$gst=$_POST['gst'];

$checkbox1=$_POST['techno'];  
$import=implode(',',$checkbox1); 

$checkbox2=$_POST['technos'];  
$import2=implode(',',$checkbox2); 


  $checkbox3=$_POST['technoo'];  
$import3=implode(',',$checkbox3); 

   $checkbox4=$_POST['technooo'];  
$import4=implode(',',$checkbox4); 

$bou_cat = $_POST['bou_cat'];
$Id=$_POST['Id'];
 
 

$random1=rand(0,10000);
$random2=rand(0,10000);

$target_dir="upload/ven_mat/";
 
 $target_file=$target_dir.basename($_FILES["efile"]["name"]);

 move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file);   
 

  
$sql ="UPDATE vendor_reg_lab SET NAME='$name',PAN='$pan',GST='$gst',WORK_CAT='$import3,$import',SUB_CAT='$import2,$import4', PREVIOUS_WRK='$prewrk',PRESENT_WRK='$preswrk',REFERENCE='$Ref' where VID='$mid'";
		
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
$id=$_GET["id"];

$sql="update vendor_reg_lab set STATUS='D' where VID='$id'";
$ex=mysqli_query($connect,$sql);
if($ex){ echo '<script>
 
window.location="vendorlabour.php?msg=Deleted success";
 
 </script>';
 
}
}
?>


<?php
$id=$_GET["id"];

$sql="select * from  vendor_reg_lab where VID=$id and STATUS='C'";
$ex=mysqli_query($connect,$sql);
$ftv11=mysqli_fetch_assoc($ex);
?>
    <form    method="post" enctype="multipart/form-data">
    <div class="table-responsive">
	 <table class="">
   <tr><td><br><a href="doc.php?otid=<?php echo $id;?>&otname=vendorlabour" class="btn btn-primary">Document</a></td></tr>
   
    </table>
	<br>
   <br>
     <table class="">
    
   
     
    </table>
    <table class="">
    <tr><td><input type="text" name="name" value="<?php echo $ftv11["NAME"];?>" placeholder="Pan" class="form-control name_list"></td><td>
      <input type="text" name="pan" value="<?php echo $ftv11["PAN"];?>" placeholder="GST" class="form-control name_list"></td><td>
      <input type="text" name="gst" value="<?php echo $ftv11["GST"];?>" placeholder="Insurance" class="form-control name_list"></td></tr>
    </table>
      <table class="">
    <tr><td>
        <h6>Work-category</h6>
  <?php 
 $id=$_GET["id"];
$sql="select * from vendor_reg_lab where VID='$id' and STATUS='C'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
<label id="workcategory"> 
<?php
   
	    $a=$ftv["WORK_CAT"]; 
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
  
<input type="text" class="form-control" name="sname" id="sname" autocomplete="off"> 
<select class="form-control" name="workcategory"  id="box"> 
<option >-Select-</option>
<?php 
$sql="select * from workcategory where role='main'";
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
$sql="select * from vendor_reg_lab where VID='$id' and STATUS='C'";
$ex=mysqli_query($connect,$sql);
while($ftv=mysqli_fetch_assoc($ex)){

?>
<label class="containerr">

 <?php
   
	    $a=$ftv["SUB_CAT"]; 
      $out=explode(',',$a);
       foreach($out as $v)
	   {?>
	    
	   <label class="containerr" id="row"><?php echo $v; ?>
	  
  <input  type="checkbox" checked id="<?php echo $v; ?>" name="technooo[]" value="<?php echo $v; ?>">
  <button type="button" name="remove" id="remove" style="padding:3px 5px;" class="btn btn-danger btn_remove">X</button><br>
  <span class="checkmark"></span>
</label>
	   
	   
	   
	   <?php   }	?>
   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       

</label>
         
<label id="subcategory"> 
  
</label>

<input type="text" class="form-control" name="aname" id="aname" autocomplete="off"> 
<select class="form-control" name="subcategory" id="abox"> 
<option>-Select-</option>
	
</select>
 
 

 


<?php }?>

 
</td>

</tr>
     </table>
		
     
     
      <table class="">
    <tr><td><input type="text" name="pre" value="<?php echo $ftv11["PREVIOUS_WRK"];?>" placeholder="Previous Work" class="form-control name_list"/></td>
    <td><input type="text" name="pres" value="<?php echo $ftv11["PRESENT_WRK"];?>" placeholder="Present Work"  class="form-control name_list"/></td>
  <td><input type="text" name="ref" value="<?php echo $ftv11["REFERENCE"];?>" placeholder="Reference"  class="form-control name_list"/></td></tr>
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
                  $sql="select * from vendor_reg_lab where STATUS='c'";
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
                            </div> <!-- end col --> </form>
                        </div> <!-- end row -->      

                </div><?php }?>
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
        <script src="assets/js/app.js"></script><script>
 $(document).ready(function(){ 
  $("#sname").keyup(function(){ 
   var txt=$("#sname").val();
    if(txt!="")
    {
    $.post("get_work.php",{s:txt},function(data){
     $("#box").html(data);
});
	}

  });var i=1;$("#box").change(function(){
 var t=$("#box").val(); var name=t;$("#workcategory").append('<label class="containerr" id="work'+i+'">'+name+'<input type="checkbox" ID="'+name+'"  name="techno[]" value="'+name+'" checked><span class="checkmark" ></span><button type="button" style="float:right;" name="remove" id="'+i+'" class="btn-xsm btn-danger btn_remove_wrk">X</button></label>');i++; });  $(document).on('click', '.btn_remove_wrk', function(){
        var button_id = $(this).attr("id"); 
        $("#work"+button_id).remove();
   }); $("#box").change(function(){ var val=$("#box").val(); 
	$.ajax({
	type: "POST",
	url: "get_sub.php",
	data:'w='+val,
	success: function(data){
		$("#abox").append(data);
	}
	});
	});// for sub category $("#aname").keyup(function(){
   var val=$("#box").val();  
   var txt=$("#aname").val();
    if(txt!="" && val!="")
    { $.post("search_sub.php",{y:txt,a:val},function(data){
     $("#abox").html(data);
});
	}

  });
var j=1;
$("#abox").change(function(){
 var t=$("#abox").val();
 var name=t;
$("#subcategory").append('<label class="containerr" id="work1'+j+'">'+name+'<input type="checkbox" ID="'+name+'"  name="technos[]" value="'+name+'" checked><span class="checkmark" ></span><button type="button" style="float:right;" name="remove" id="'+j+'" class="btn-xsm btn-danger btn_remove_sub">X</button></label>');
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
        <script>$(document).ready(function(){<?php$id=$_GET["id"];
$sql="select * from vendor_reg_lab where VID='$id' and STATUS='C'";
$ex=mysqli_query($connect,$sql);
$fetch=mysqli_fetch_assoc($ex);
$string=$fetch["WORK_CAT"];
$str_split=explode(",",$string);
?>
// for vendor category
<?php
$sql="select * from workcategory where role='main'";
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
$sql="select * from workcategory where role='branch'";
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
 
       

var i=0;var j=0; 
var MaxValue=5;//add phone
 $('#addid').click(function(){
        i++;
        if(i<MaxValue)
    {
        $('#dynamic_field_id').append('<tr id="row_id'+i+'"><td><label for="id" class="col-sm-12 col-form-label">ID</label><input type="text" name="id'+i+'"   class="form-control name_list" required /></td><td><label for="main" class="col-sm-12 col-form-label">Main Categories</label><input type="text" name="Main'+i+'" id="main" class="form-control name_list" required /></td><td><label for="Sub" class="col-sm-12 col-form-label">Sub Categories</label><input type="text" name="Sub'+i+'"  id="Sub" class="form-control name_list" required /></td><td><label for="document" class="col-sm-12 col-form-label">Document</label><input type="file" name="idfile1'+i+'" id="document" class="form-control name_list"></td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_id">X</button></td></tr>');
     }
    });// add broucher $('#addbro').click(function(){
        j++;
        if(j<MaxValue)
    {  
        $('#dynamic_field_bro').append('<tr id="row_bro'+j+'"><td><label for="bro" class="col-sm-12 col-form-label">Broucher</label><input type="text" name="bro'+j+'"   class="form-control name_list" required /></td><td><label for="main1" class="col-sm-12 col-form-label">Main Categories</label><input type="text" name="Main'+2+''+j+'" id="main" class="form-control name_list" required /></td><td><label for="Sub1" class="col-sm-12 col-form-label">Sub Categories</label><input type="text" name="Sub'+2+''+j+'"  id="Sub" class="form-control name_list" required /></td><td><label for="document2" class="col-sm-12 col-form-label">Document</label><input type="file" name="brofile2'+j+'" id="document" class="form-control name_list" /></td><td ><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_bro">X</button></td></tr>');
     }
    });      $(document).on('click', '.btn_remove_id', function(){
        var button_id = $(this).attr("id"); 
       if(i>=1 ){          i--;
       }
        $('#row_id'+button_id+'').remove();
         if(i>=1){
         i--;
	   }
          i=1;
    });    $(document).on('click', '.btn_remove_bro', function(){
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
</script><script>
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
    }); $(".search").keyup(function(){
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


