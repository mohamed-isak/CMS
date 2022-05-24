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
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Add Office Details</h4>
                                </div>
                               
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Add Main Details</h4>
                                        <p class="sub-title">Add Details Below form</p>
        
                                        <form  method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Company Name" name="name" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Address" name="address1" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Mobile </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Mobile" name="mobile" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Landline</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Landline" name="landline" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Email" name="email" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Website" name="website" id="example-text-input">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tax</label>
                                         
                                            <div class="col-sm-10">
                                                <select class="form-control" name="tax">
                                                    <option value="">Select Tax</option>
													
													                                                    <option value="6%">6%</option>
                                                                                                       <option value="12%">12%</option>
                                                                                                       <option value="18%">18%</option>
                                                                                                      
                                                                                                   </select>
                                            </div>
                                        </div> <div class="form-group row" style="display:none;">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Role" name="role" value="main" id="example-text-input">
                                            </div>
                                        </div> <div class="form-group row" style="display:none;">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Main</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Role" name="main" value="mainoffice" id="example-text-input">
                                            </div>
                                        </div><div class="form-group row">
                                             <div class="col-sm-4"></div> <div class="col-sm-4">
                                                <input class="form-control btn btn-primary waves-effect waves-light active" type="submit" value="Submit" name="submit" id="example-text-input">
                                            </div>
                                        </div>
                                          </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      
<?php 

		
	 if(isset($_POST['submit']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "Insert into mainoffice(name,address1,mobile,landline,email,website,tax,role,main,status)values ('$name','$address1','$mobile','$landline','$email','$website','$tax','$role','$main','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  echo "<script>";
		          echo "alert('Inserted Successfully')";
		          echo "</script>";
				 	echo'<script>
  window.location= "mainoffice.php?msg=Inserted Successfully";
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "mainoffice.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	
	?>
                         <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Datas</h4>
                                        <p class="sub-title">Here are examples of  applied to each
                                            <code class="highlighter-rouge">input</code> <code
                                                    class="highlighter-rouge">type</code>.</p>
        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-default">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>Mobile</th>
                                                        <th>Landline</th>
                                                        <th>Email</th>
                                                        <th>Website</th>
                                                        <th>Tax</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                             $qry="SELECT * from mainoffice ";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><a href="mainoffice.php?name1=<?php echo $row['name'];?>"><?php echo $row['name'];?></a></td>
                                                        <td><?php echo $row['address1'];?></td>
                                                        <td><?php echo $row['mobile'];?></td>
                                                        <td><?php echo $row['landline'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['website'];?></td>
                                                        <td><?php echo $row['tax'];?></td>
                                                         <td><a href="mainofficeedit.php?dlt=<?php echo $row['Id'];?>" onClick="return confirm('Do you want to Delete this record?')"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a></td>
                                                        <td><a href="mainofficedelete.php?dlt=<?php echo $row['Id'];?>" onClick="return confirm('Do you want to Delete this record?')"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></button></a></td>
                                                    </tr>
							<?php $i++;}?>  </tbody>
                                            </table>
                                        </div>   </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                    </div>
      <?php $name1=$_GET['name1'];if ($name1==''){}else{?>              <!-- container-fluid -->
  <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Add Branch Details</h4>
                                        <p class="sub-title">Add Details Below form</p>
        
                                        <form  method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Company Name" name="name" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Address" name="address1" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Mobile </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Mobile" name="mobile" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Landline</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Landline" name="landline" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Email" name="email" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Website" name="website" id="example-text-input">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tax</label>
                                         
                                            <div class="col-sm-10">
                                                <select class="form-control" name="tax">
                                                    <option value="">Select Tax</option>
													
													                                                    <option value="6%">6%</option>
                                                                                                       <option value="12%">12%</option>
                                                                                                       <option value="18%">18%</option>
                                                                                                      
                                                                                                   </select>
                                            </div>
                                        </div> <div class="form-group row" style="display:none;">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Role" name="role" value="branch" id="example-text-input">
                                            </div>
                                        </div> <div class="form-group row" style="display:none;">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Main</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Role" name="main" value="<?php echo $name1;?>" id="example-text-input">
                                            </div>
                                        </div><div class="form-group row">
                                             <div class="col-sm-4"></div> <div class="col-sm-4">
                                                <input class="form-control btn btn-primary waves-effect waves-light active" type="submit" value="Submit" name="submited" id="example-text-input">
                                            </div>
                                        </div>
                                          </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      
<?php 

		
	 if(isset($_POST['submited']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "Insert into mainoffice(name,address1,mobile,landline,email,website,tax,role,main,status)values ('$name','$address1','$mobile','$landline','$email','$website','$tax','$role','$main','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  echo "<script>";
		          echo "alert('Inserted Successfully')";
		          echo "</script>";
				 	echo'<script>
  window.location= "mainoffice.php?msg=Inserted Successfully";
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "mainoffice.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	
	?>
                         <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title"><?php echo $name1;?> Branch Office</h4>
                                        <p class="sub-title">Here are examples of  applied to each
                                            <code class="highlighter-rouge">input</code> <code
                                                    class="highlighter-rouge">type</code>.</p>
        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-default">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>Mobile</th>
                                                        <th>Landline</th>
                                                        <th>Email</th>
                                                        <th>Website</th>
                                                        <th>Tax</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                             $qry="SELECT * from mainoffice where main='$name1'";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['address1'];?></td>
                                                        <td><?php echo $row['mobile'];?></td>
                                                        <td><?php echo $row['landline'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['website'];?></td>
                                                        <td><?php echo $row['tax'];?></td>
                                                         <td><a href="mainofficeedit.php?dlt=<?php echo $row['Id'];?>" onClick="return confirm('Do you want to Delete this record?')"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a></td>
                                                        <td><a href="mainofficedelete.php?dlt=<?php echo $row['Id'];?>" onClick="return confirm('Do you want to Delete this record?')"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></button></a></td>
                                                    </tr>
							<?php $i++;}?>  </tbody>
                                            </table>
                                        </div>   </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                    </div>
             <?php }?>     
                </div>
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
        
    </body>

</html>