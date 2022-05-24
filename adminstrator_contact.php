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

<style>

.but{padding: 6%;
    margin-right: 2px;
    float: right;
    width: auto;}<?php $name1=$_GET['name1'];   $name2=$_GET['name2']; 
                         ?> .cla<?php echo $name1; ?>{ background:skyblue !important;}<?php 
                             ?> .clas<?php echo $name2; ?>{ background:skyblue !important;}
						
</style> 
    </head>

    <body>

        <!-- Begin page -->
      
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
                            <div class="row align-items-center has">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Contact</h4>
                                </div>
                               
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="row">
                                    <div class="card-body col-sm-6">
        
                                        <h4 class="mt-0 header-title"> </h4>
        
                                        <form  method="POST" enctype="multipart/form-data" >
                                       
                                        <div class="form-group row">   
                                          
                                      
                                       
                                   
                                   
                                  <?php $name1=$_GET['name1']; if($name1==''){ ?>        <div class="col-sm-9">     
								  <input class="form-control" type="text" placeholder="" name="workcategoryup" value="" id="example-text-input"><input class="form-control" type="text" placeholder="Company Name" name="role" value="main" id="example-text-input" style="display:none;">
                                         
                                    
                                                <input class="form-control" type="text" placeholder="Company Name" name="main" value="workcategory" id="myInput" onkeyup="myFunction()" style="display:none;"> </div> <div class="col-sm-3">  
<button type='submit' name='Delete'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button> 												
                               
                          <button type='submit' name='Update'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                              
                         <button type='submit' name='submited'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button>
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="workcategory.php" ><i class="fa fa-refresh"></i></a>
                           </div> <?php } $name1=$_GET['name1']; ?>
                                          <?php 
                             $qry="SELECT * from workcategory where role='main' AND Id='$name1' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?><div class="col-sm-9"> <input class="form-control" type="text" placeholder="" name="workcategoryup" value="<?php echo $row['workcategory']; ?>" id="myInput"  onkeyup="myFunction()"> 
                                                <input class="form-control" type="text" placeholder="Company Name" name="role" value="main" id="example-text-input" style="display:none;">
                                         
                                    
                                                <input class="form-control" type="text" placeholder="Company Name" name="main" value="workcategory" id="example-text-input"  style="display:none;">
                                             
                                             
                                            </div>
											
											
											
                           
                          <div class="col-sm-3">   

 <button type='submit' name='Delete'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button> 						  
                               
                          <button type='submit' name='Update'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                             
                         <button type='submit' name='submited'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button>
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="workcategory.php" ><i class="fa fa-refresh"></i></a>
                           </div>
                           
                           <?php }
                             $qry="SELECT * from workcategory where role='main' AND Id='$name1' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?> 
                                                <input class="form-control" type="text" placeholder="Category" name="Id1" value="<?php echo $row['Id']; ?>" id="example-text-input" style="display:none">	
                                             
                                             <?php }?> 
                                          
                                             
                                            
                                           
                                      
                                          </div></form>
                                 <div  id="overflowTest"> <table class="table mb-0" id="myTable">
                                               
                                                <tbody><?php
                             $qry="SELECT * from workcategory where role='main' AND status='C' order by workcategory asc";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr class="cla<?php echo $row['Id'];?>">
                                                         <td  style="border-top:none !important;padding:5px;"><a href="workcategory.php?name1=<?php echo $row['Id'];?>"><?php echo $row['workcategory'];?></a></td>
                                                       
                                                       
                                                    </tr>
							<?php $i++;}?>  </tbody>
                                            </table>
                                       </div>     </div>
                                       <div class="card-body col-sm-6">
        
                                        <h4 class="mt-0 header-title"> </h4>
        
                                        <form  method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group row">
                                          
                                      
                                       
                                                <input class="form-control" type="text" placeholder="Company Name" name="role1" value="branch" id="example-text-input" style="display:none;">
                                         <?php
                             $qry="SELECT * from workcategory where role='main' AND  Id='$name1'  AND status='C'  ";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                       
                                                <input class="form-control" type="text" placeholder="Company Name" name="main1" value="<?php echo $row['Id'];?>" id="example-text-input" style="display:none;">
							<?php } ?>
                                    <?php  $name2=$_GET['name2']; ?>
                                                 <?php 
                             $qry="SELECT * from workcategory where role='branch' AND Id='$name2' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            { $workcategory=$row['workcategory'];}?>   
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="" name="workcategoryup1" value="<?php echo $workcategory; ?>"  id="myInput1" onkeyup="myFunctio()" >
                                            </div>
                                             <div class="col-sm-3">
 <button type='submit' name='Delete1'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button>											 
                           
                           <button type='submit' name='Update1'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fa fa-download"></i></button>
                                            
                         <button type='submit' name='Save1'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button> 
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="workcategory.php?name1=<?php echo $name1;?>" ><i class="fa fa-refresh"></i></a>
                           </div> <?php 
                             $qry="SELECT * from workcategory where role='branch' AND Id='$name2' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?> 
                                                <input class="form-control" type="text" placeholder="Category" name="Id2" value="<?php echo $row['Id']; ?>" id="example-text-input" style="display:none">	
                                             
                                             <?php }?> 
                                         </div></form>  <div  id="overflowTest"> <table class="table mb-0"  id="myTable1">
                                               
                                                <tbody><?php
                             $qry="SELECT * from workcategory where role='branch' AND main='$name1' AND status='C'  order by workcategory asc";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr  class="clas<?php echo $row['Id'];?>">
                                                         <td  style="border-top:none !important;padding:5px;"><a href="workcategory.php?name1=<?php echo $row['main'];?>&name2=<?php echo $row['Id'];?>"><?php echo $row['workcategory'];?></a></td>
                                                       
                                                       
                                                    </tr>
							<?php $i++;}?>  </tbody>
                                            </table>
                                       </div>   
                                      </div>
                               
                                        </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->  <!--ADMIN_CONTACT DETAILS -->     <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        

                             <?php
                             
                             if(isset($_POST['submit']))
                             { // Get Phone Number
   $Number1=$_POST["number1"];
   $Number2= $_POST["number11"];   $Number3= $_POST["number2"];   $Number4= $_POST["number21"];   $Number5= $_POST["number3"];   $Number6= $_POST["number31"];   $Number7= $_POST["number4"];   $Number8= $_POST["number41"];   $Number9=$_POST["number5"];   $Number10= $_POST["number51"]; 
 // Get Address $Address1= $_POST["address1"];
   $Address2= $_POST["address11"];
   $Address3= $_POST["address2"];
   $Address4= $_POST["address21"];
   $Address5= $_POST["address3"];
   $Address6= $_POST["address31"];
   $Address7= $_POST["address4"];
   $Address8= $_POST["address41"];
   $Address9=$_POST["address5"];
   $Address10= $_POST["address51"]; 
 // Get mails $Mail1=$_POST["email1"];
   $Mail2= $_POST["email11"];
   $Mail3= $_POST["email2"];
   $Mail4= $_POST["email21"];
   $Mail5= $_POST["email3"];
   $Mail6= $_POST["email31"];
   $Mail7= $_POST["email4"];
   $Mail8= $_POST["email41"];
   $Mail9=$_POST["email5"];
   $Mail10= $_POST["email51"]; // Get Events $Event1=$_POST["events1"];
   $Event2= $_POST["events11"];
   $Event3= $_POST["events2"];
   $Event4= $_POST["events21"];
   $Event5= $_POST["events3"];
   $Event6= $_POST["events31"];
   $Event7= $_POST["events4"];
   $Event8= $_POST["events41"];
   $Event9=$_POST["events5"];
   $Event10= $_POST["events51"]; 
 // insert query 
 
$query= "insert into administrator_contact (name,group1,PHONE1,PHONE2,PHONE3,PHONE4,PHONE5,PHONE6,PHONE7,PHONE8,PHONE9,PHONE10,ADDRESS1,ADDRESS2,ADDRESS3,ADDRESS4,ADDRESS5,ADDRESS6,ADDRESS7,ADDRESS8,ADDRESS9,ADDRESS10,EMAIL1,EMAIL2,EMAIL3,EMAIL4,EMAIL5,EMAIL6,EMAIL7,EMAIL8,EMAIL9,EMAIL10,EVENT1,EVENT2,EVENT3,EVENT4,EVENT5,EVENT6,EVENT7,EVENT8,EVENT9,EVENT10) values('$name','$group1','$Number1','$Number2', '$Number3','$Number4','$Number5','$Number6','$Number7','$Number8','$Number9','$Number10',   '$Address1','$Address2', '$Address3','$Address4','$Address5','$Address6','$Address7','$Address8','$Address9','$Address10','$Mail1','$Mail2', '$Mail3','$Mail4','$Mail5','$Mail6','$Mail7','$Mail8','$Mail9','$Mail10','$Event1','$Event2', '$Event3','$Event4','$Event5','$Event6','$Event7','$Event8','$Event9','$Event10')        "; $execute=mysqli_query($connect,$query);
 
    if($execute)
    {
        echo "<h5>New record created successfully !</h5>";
     } 
     else 
     {
        echo "Error: " . $ex1 . "" . mysqli_error($connect);
     }

//Insert Query of SQL

    

}

                              ?>

                                    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                                       
                       <div class="table-responsive"><input type="text" name="name" class="form-control">
                       <input type="text" name="group1" class="form-control">
 <table class="table table-bordered" id="dynamic_field_of_phone">
                            <tr>
                              
                                <td ><input type="text" name="number1" placeholder="Phone" class="form-control name_list"/></td>                                <td ><input type="text" name="number11" placeholder="Phone" class="form-control name_list"/></td>
                                <td ><button type="button" name="add" id="addphone" class="btn btn-success">Add More</button></td>
                            </tr>
                        </table>  
                        <table class="table table-bordered" id="dynamic_field_of_address">
                       
                            <tr><td><textarea name="address1" placeholder="Address" class="form-control name_list" required></textarea></td>                           <td><textarea name="address11" placeholder="Address" class="form-control name_list" required></textarea></td>                              <td ><button type="button" name="addaddress" id="addaddress" class="btn btn-success">Add More</button></td>                          </tr>
                
                        </table>
 
                        <table class="table table-bordered" id="dynamic_field_of_mail" >
                            <tr>
                        
                        <td><input type="email" name="email1" placeholder="E-mail" class="form-control name_list" required /></td>
                       <td><input type="email" name="email11" placeholder="E-mail" class="form-control name_list" required /></td>                          <td ><button type="button" name="addmail" id="addmail" class="btn btn-success">Add More</button></td>
                            </tr>                     </table>                      <table class="table table-bordered" id="dynamic_field_of_event">
                        <tr>                          <td><input type="text" name="events1" placeholder="Events" class="form-control name_list" required /></td>                           <td><input type="text" name="events11" placeholder="Events" class="form-control name_list" required /></td>                            <td ><button type="button" name="addevent" id="addevent" class="btn btn-success">Add More</button></td>                        </tr>
                        </table>


                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                    </div>
                </form>
        
							
							        </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
  
                </div>
                <!-- content -->
<?php 

		
	 if(isset($_POST['submited']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "Insert into workcategory(workcategory,role,main,status)values ('$workcategoryup','$role','$main','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "workcategory.php??name1='.$name1.'";
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "workcategory.php?name1='.$name1.'";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	
		
	 if(isset($_POST['Save1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "Insert into workcategory(workcategory,role,main,status)values ('$workcategoryup1','$role1','$main1','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "workcategory.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "workcategory.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 } 
		
		
		
		if(isset($_POST['Update']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update workcategory set workcategory='$workcategoryup' where Id='$Id1'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "workcategory.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "workcategory.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
		if(isset($_POST['Delete']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update workcategory set status='D' where Id='$Id1'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "workcategory.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "workcategory.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	if(isset($_POST['Update1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update workcategory set workcategory='$workcategoryup1' where Id='$Id2'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "workcategory.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "workcategory.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
if(isset($_POST['Delete1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update workcategory set status='D' where Id='$Id2'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  
				 	echo'<script>
  window.location= "workcategory.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "workcategory.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
	?>
                <footer class="footer">
                    © 2019 Copyrights <span class="d-none d-sm-inline-block">   </span>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div><script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script><script>
function myFunctio() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>
<script>
$(document).ready(function(){
    var i=1;    var j=1;    var k=1;    var l=1;
    var MaxValue=6;
       
  //For phone number

    $('#addphone').click(function(){
        i++;
        if(i<MaxValue)
    {
        $('#dynamic_field_of_phone').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" placeholder="Phone" class="form-control name_list" /></td><td><input type="text" name="number'+i+''+1+'" placeholder="Phone" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone">X</button></td></tr>');
     }
    });
        // for address 
      $('#addaddress').click(function(){
        j++;
        if(j<MaxValue)
    {
        $('#dynamic_field_of_address').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'" placeholder="Address" class="form-control name_list" ></textarea></td><td><textarea name="address'+j+''+1+'" placeholder="Address" class="form-control name_list" ></textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address">X</button></td></tr>');
     }
    });// for mail    $('#addmail').click(function(){
        k++;
        if(k<MaxValue)
    {
        $('#dynamic_field_of_mail').append('<tr id="row_mail'+k+'"><td><input type="email" name="email'+k+'" placeholder="E-mail" class="form-control name_list"  /></td><td><input type="email" name="email'+k+''+1+'" placeholder="E-mail" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_mail">X</button></td></tr>');
     }
    });// for events    $('#addevent').click(function(){
        l++;
        if(l<MaxValue)
    {
        $('#dynamic_field_of_event').append('<tr id="row_event'+l+'"><td><input type="text" name="events'+l+'" placeholder="Events" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" placeholder="Events" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_event">X</button></td></tr>');
     }
    });
// remove for phone
    $(document).on('click', '.btn_remove_phone', function(){
        var button_id = $(this).attr("id");        if(i>=1 ){        i--;       }
        $('#row_phone'+button_id+'').remove();         if(i>=1){         i--;	   }
          i=1;
    });//remove for address $(document).on('click', '.btn_remove_address', function(){
        var button_id = $(this).attr("id"); 
       if(j>=1 ){
        j--;
       }
        $('#row_address'+button_id+'').remove();
         if(j>=1){
         j--;
	   }
          j=1;
    });// remove for Email
 $(document).on('click', '.btn_remove_mail', function(){
        var button_id = $(this).attr("id"); 
       if(k>=1 ){
        k--;
       }
        $('#row_mail'+button_id+'').remove();
         if(k>=1){
         k--;
	   }
          k=1;
    });
    //remove for Events
 $(document).on('click', '.btn_remove_event', function(){
        var button_id = $(this).attr("id"); 
       if(l>=1 ){
        l--;
       }
        $('#row_event'+button_id+'').remove();
         if(l>=1){
         l--;
	   }
          l=1;
    });
    $('#submit').click(function(){      
        $.ajax({
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });
    
});
</script>
</html>