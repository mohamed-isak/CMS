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

.but{padding: 5%;
    margin-right: 1px;
    float: right;
    width: auto;}<?php $name1=$_GET['name1'];   $name2=$_GET['name2']; 
                         ?> .cla<?php echo $name1; ?>{ background:skyblue !important;}<?php 
                             ?> .clas<?php echo $name2; ?>{ background:skyblue !important;}
						
</style>   </head>

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
                                    <h4 class="page-title">filemanagement </h4>
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
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="filemanagement.php" ><i class="fa fa-refresh"></i></a>
						 
                           </div> <?php } $name1=$_GET['name1']; ?>
                                          <?php 
                             $qry="SELECT * from filemanagement where role='main' AND Id='$name1' ";
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
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="filemanagement.php" ><i class="fa fa-refresh"></i></a>
                           </div>
                           
                           <?php }
                             $qry="SELECT * from filemanagement where role='main' AND Id='$name1' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?> 
                                                <input class="form-control" type="text" placeholder="Category" name="Id1" value="<?php echo $row['Id']; ?>" id="example-text-input" style="display:none">	
                                             
                                             <?php }?> 
                                          
                                             
                                            
                                           
                                      
                                          </div></form>
                                 <div  id="overflowTest"> <table class="table mb-0" id="myTable">
                                               
                                                <tbody><?php
                             $qry="SELECT * from filemanagement where role='main' AND status='C' order by workcategory asc";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr class="cla<?php echo $row['Id'];?>">
                                                         <td  style="border-top:none !important;padding:5px;"><a href="filemanagement.php?name1=<?php echo $row['Id'];?>"><?php echo $row['workcategory'];?></a></td>
                                                       
                                                       
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
                             $qry="SELECT * from filemanagement where role='main' AND  Id='$name1'  AND status='C'  ";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                       
                                                <input class="form-control" type="text" placeholder="Company Name" name="main1" value="<?php echo $row['Id'];?>" id="example-text-input" style="display:none;">
							<?php } ?>
                                    <?php  $name2=$_GET['name2']; ?>
                                                <?php 
                             $qry="SELECT * from filemanagement where role='branch' AND Id='$name2' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            { $workcategory=$row['workcategory'];}?> 
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="" name="workcategoryup1" value="<?php echo $workcategory; ?>"  id="myInput1" onkeyup="myFunctio()" >
                                            </div>
                                             <div class="col-sm-3">
 <button type='submit' name='Delete1'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button>											 
                           
                           <button type='submit' name='Update1'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                            
                         <button type='submit' name='Save1'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button> 
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="filemanagement.php?name1=<?php echo $name1;?>" ><i class="fa fa-refresh"></i></a>
                           </div> <?php 
                             $qry="SELECT * from filemanagement where role='branch' AND Id='$name2' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?> 
                                                <input class="form-control" type="text" placeholder="Category" name="Id2" value="<?php echo $row['Id']; ?>" id="example-text-input" style="display:none">	
                                             
                                             <?php }?> 
                                         </div></form>  <div  id="overflowTest"> <table class="table mb-0"  id="myTable1">
                                               
                                                <tbody><?php
                             $qry="SELECT * from filemanagement where role='branch' AND main='$name1' AND status='C'  order by workcategory asc";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr  class="clas<?php echo $row['Id'];?>">
                                                         <td  style="border-top:none !important;padding:5px;"><a href="filemanagement.php?name1=<?php echo $row['main'];?>&name2=<?php echo $row['Id'];?>"><?php echo $row['workcategory'];?></a></td>
                                                       
                                                       
                                                    </tr>
							<?php $i++;}?>  </tbody>
                                            </table>
                                       </div>   
                                      </div>
                               
                                        </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      
  
                </div>
                <!-- content -->
<?php 

		
	 if(isset($_POST['submited']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "Insert into filemanagement(workcategory,role,main,status)values ('$workcategoryup','$role','$main','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "filemanagement.php??name1='.$name1.'";
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "filemanagement.php?name1='.$name1.'";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	
		
	 if(isset($_POST['Save1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "Insert into filemanagement(workcategory,role,main,status)values ('$workcategoryup1','$role1','$main1','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "filemanagement.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "filemanagement.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 } 
		
		
		
		if(isset($_POST['Update']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update filemanagement set workcategory='$workcategoryup' where Id='$Id1'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "filemanagement.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "filemanagement.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
		if(isset($_POST['Delete']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update filemanagement set status='D' where Id='$Id1'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "filemanagement.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "filemanagement.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	if(isset($_POST['Update1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update filemanagement set workcategory='$workcategoryup1' where Id='$Id2'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "filemanagement.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "filemanagement.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
if(isset($_POST['Delete1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update filemanagement set status='D' where Id='$Id2'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  
				 	echo'<script>
  window.location= "filemanagement.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "filemanagement.php";
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

</html>