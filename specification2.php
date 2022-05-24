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

		<script>
//ajax 

function getcategory(val) {
	$.ajax({
	type: "POST",
	url: "get_category.php",
	data:'work_id='+val,
	success: function(data){
		$("#work").html(data);
	}
	});
}function getsubbranch(val) {
	$.ajax({
	type: "POST",
	url: "get_branch.php",
	data:'category_id='+val,
	success: function(data){
		$("#branch").html(data);
	}
	});
}
		</script>
<style>

.but{padding: 5%;
    margin-right: px;
    float: right;
    width: auto;}<?php $name1=$_GET['name1'];   $name2=$_GET['name2']; 
                             $qry="SELECT * from specification where  status='C' AND Id='$name1'";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?> .<?php echo $row['specification1']; }?>{ background:skyblue !important;}<?php 
                             $qry="SELECT * from specification1 where  status='C' AND ='$name2'";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?> .<?php echo $row['specification1']; }?>{ background:skyblue !important;}
						
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
                            <div class="row align-items-center ">
							
                                <div class="col-sm-6 has">
                                    <h4 class="page-title">specification </h4>
                                </div>
								
                         
                                </div>
								
								
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
							
                                <div class="card m-b-30">
                                    <div class="row">
                                    <div class="card-body col-sm-12">
        
                                        <h4 class="mt-0 header-title">  </h4>
        
                                        <form  method="POST" enctype="multipart/form-data" >
                                       
                                          
                                          
                                      
                                        <div class="row">     
                                  
			</div>
			
			
			<?php  $name3 = $_GET['name3'] ; if($name3=='') {?>
			   <div class="col-sm-9">  
 
                            
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                      <form method="POST"  onSubmit="return validation();"  enctype="multipart/form-data" > 
									
										
                           
										<div class="row"> 
										
										
										<div class="col-6"> 
										<div class="form-group"> 
							<label for="exampleInputPassword1">Work Group</label> 
							<select name="work" onclick="getcategory(this.value);" class="form-control" id="select1 exampleInputPassword1">
							   <option value="">Select Work Group</option>
							   
							   <?php 
						
                             $qry="SELECT distinct(work) from specification";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_assoc($insertqry))
                            {?>
									
									<option value="<?php echo $row['work']; ?>"><?php echo $row['work']; ?></option>
							 
							   <?php }?>
							                                                                                                                                                                                                                                                                                                                                                                                                           
								</select>
							
							</div>
							
							
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">Main Data</label> 
							<div class="form-control" style="height:auto;overflow-y:scroll;" id="branch" id="exampleInputPassword1" name="subbranch" id="subbranch" placeholder="">                                                      </div>
							 
							</div>
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">General Specification</label> 
							<textarea type="text"  width="100%" rows="3" class="form-control" id="exampleInputPassword1" name="general" placeholder=""> </textarea>
							
							</div>
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">Material & Labour Specification</label> 
							<textarea type="text"  width="100%" rows="3" class="form-control" id="exampleInputPassword1" name="matlab" placeholder=""> </textarea>
							
							</div>
							</div>
							
							<div class="col-6"> 
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">Work Category</label> 
							<select name="workcategory" onclick="getsubbranch(this.value)" class="form-control" id="work" id="exampleInputPassword1">
				                                                                                                                                                                                                                                                                                                                                                                                              
								</select>
							
							</div>
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">units</label> 
							<select name="units" class="form-control">
							   <option value="">Select Units</option>
							   
							   <?php 
							
                             $qry="SELECT * from units where  status='C'";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row1=mysqli_fetch_array($insertqry))
                            {?>
									<option value="<?php echo $row1['units']; ?>"><?php echo $row1['units']; ?></option>
							   <?php }?>
							                                                                                                                                                                                                                                                                                                                                                                                                           
								</select>
							
							</div>
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">Labour specification</label> 
							<textarea type="text"  width="100%" rows="3" class="form-control" id="exampleInputPassword1" name="labour" placeholder=""> </textarea>
							
							</div>
							<div class="form-group"> 
							<label for="exampleInputPassword1">Material Specification</label> 
							<textarea type="text"  width="100%" rows="3" class="form-control" id="exampleInputPassword1" name="material" placeholder=""> </textarea>
							
							</div>
								
							
							</div>
							
							
							<br>
							<div class="col-6"> 
							  <button type='submit' name='Delete1'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button>											 
                           
                           <button type='submit' name='Update'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                            
                         <button type='submit' name='submit'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button> 
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="specification1.php" ><i class="fas fa-plus"></i></a>
                           
                            
							                 
                                </div>
                                </div>
								</form>
								<br>
								
								
                            </div> <!-- end col -->
                            </div> <!-- end col -->
                        <!-- end row -->      
                        </div>
		  <?php } ?>
						<!-- end row -->      
                         <!-- end row -->      
 
 		<?php 
		
		 $name1 = $_GET['name1']; $name2 = $_GET['name2'];  $name3 = $_GET['name3'] ; 
	$qry1="SELECT * from specification where status='C' and work='$name1' and workcategory='$name2' and subbranch='$name3'";
							 $insertqry1 = mysqli_query($connect, $qry1);
                           
                             while($row1=mysqli_fetch_array($insertqry1))
                            {?>

 <div class="col-sm-9">  
 
                            
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                    	   
                     

        
                                        <form method="POST"  onSubmit="return validation();"  enctype="multipart/form-data" > 
										
										<div class="row"> 
										
										<div class="col-6"> 
										<div class="form-group"> 
							<label for="exampleInputPassword1">Work Group</label> 
							<select name="work" class="form-control" id="select1">
							   <option><?php echo $row1['work']; ?></option>
							 
							  
							   <?php 
						
                             $qry="SELECT * from work where  status='C' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
									
									<option id="<?php echo $row['Id']; ?>"><?php echo $row['work']; ?></option>
							 
							   <?php }?>
							                                                                                                                                                                                                                                                                                                                                                                                                           
								</select>
							
							</div>
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">Work Category</label> 
							<select name="workcategory" class="form-control" id="select2">
							   
									
									<option><?php echo $row1['workcategory']; ?></option>
							 
							  
							              
							   <?php 
						
                             $qry="SELECT * from workcategory where role='main' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
									
								<option value="<?php echo $row['workcategory']; ?>"><?php echo $row['workcategory']; ?></option>
							 
							   <?php }?>
							                                                                                                                                                                                                                                                                                                                                                                                                           
								</select>
							
							</div>
							
							
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">Main Data</label> 
							
							 
						
									<input type="text" class="form-control"  id="exampleInputPassword1" name="subbranch" value="<?php echo $row1['subbranch']; ?>"> 
									
							 <input type="text"   class="form-control" id="exampleInputPassword1" name="Id" placeholder="" value="<?php echo $row1['Id']; ?>" style="display:none;">
							
							   
							             
							
							
							
							</div>
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">General Specification</label> 
							<input type="text"  width="100%" rows="3" class="form-control" id="exampleInputPassword1" name="general" value="<?php echo $row1['general']; ?>"> </input>
							
							</div>
							
							</div>
							
							<div class="col-6"> 
							
							<div class="form-group"> 
							<label for="exampleInputPassword1">Labour specification</label> 
							<input type="text"   class="form-control" id="exampleInputPassword1" name="labour" placeholder="" value="<?php echo $row1['labour']; ?>"> </input>
							
							</div>
							<div class="form-group"> 
							<label for="exampleInputPassword1">Material Specification</label> 
							<input type="text"   class="form-control" id="exampleInputPassword1" name="material" placeholder="" value="<?php echo $row1['material']; ?>"> </input>
							
							</div>
							<div class="form-group"> 
							<label for="exampleInputPassword1">Material & Labour Specification</label> 
							<input type="text"  width="100%" rows="3" class="form-control" id="exampleInputPassword1" name="matlab" placeholder="" value="<?php echo $row1['matlab']; ?>"> </input>
							
							</div>
							<div class="form-group"> 
							<label for="exampleInputPassword1">units</label> 
							<select name="units" class="form-control">
							   <option><?php echo $row1['units']; ?></option>
							   
							   <?php 
							
                             $qry="SELECT * from units where  status='C'";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row2=mysqli_fetch_array($insertqry))
                            {?>
									<option value="<?php echo $row2['units']; ?>"><?php echo $row2['units']; ?></option>
							   <?php }?>
							                                                                                                                                                                                                                                                                                                                                                                                                           
								</select>
							
							</div>
							
							
								
							</div>
							
							
							
							<div class="col-6"> 
							  <button type='submit' name='Delete'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button>											 
                           
                           <button type='submit' name='Update'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                            
                         <button type='submit' name='submit'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button> 
						 <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="specification1.php" ><i class="fas fa-plus"></i></a>
                           
                            
							                 
                                </div>
							
                            
							
							
							                   
                                </div>
								</form>
								<br>
								
								
                            </div> <!-- end col -->
                            </div> <!-- end col -->
                        <!-- end row -->      
                        </div> <!-- end row -->      
							<?php } ?>

       
 
<?php 



		
	 if(isset($_POST['submit']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
	  $insertss= "Insert into specification(work,workcategory,subbranch,general,labour,material,matlab,units,status)values ('$work','$workcategory','$subbranch','$general','$labour','$material','$matlab','$units','C')";
			 

		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				
				 	echo'<script>
  window.location= "specification1.php??name1='.$name1.'&name2='.$name2.'&name3='.$name3.'";
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "specification1.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
		 
		 if(isset($_POST['Update']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update specification set work='$work',workcategory='$workcategory',subbranch='$subbranch',general='$general',labour='$labour',material='$material',matlab='$matlab', 
 units='$units' where Id='$Id'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "specification1.php??name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "specification1.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
		 
		 if(isset($_POST['Delete']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update specification set status='D' where Id='$Id'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  
				 	echo'<script>
  window.location= "specification1.php??name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "specification.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
	
	?>
	
	
	 
                            <!-- container-fluid -->

                </div>
                <!-- content -->




            </div>
          
					 
			  </div>
			  
			  
              
               </div>
                                   
                                   
                                    </div>  
                                        </div>
                                </div>
                             <!-- end col -->
                        
                <!-- content -->
				
			
         <footer class="footer">
                    © 2019 Copyrights <span class="d-none d-sm-inline-block">   </span>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        <script>
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