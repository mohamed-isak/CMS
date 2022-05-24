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
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span class="logo-light">
                            <i class="mdi mdi-camera-control"></i> Logo
                        </span>
                        <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">
                        
                        <!-- language-->
                      
                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                            </a>
                        </li>

                        <!-- notification -->

                        <li class="dropdown notification-list list-inline-item">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Change Password</a>
                                   
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                       
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

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
        
                                        
                                       <?php $dlt=$_GET['dlt'];
                             $qry="SELECT * from mainoffice where Id='$dlt'";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?><form  method="POST" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Company Name" name="name" value="<?php echo $row['name'];?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Address" name="address1" value="<?php echo $row['address1'];?>"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Mobile </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Mobile" name="mobile"  value="<?php echo $row['mobile'];?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Landline</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Landline" name="landline"  value="<?php echo $row['landline'];?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Email" name="email"  value="<?php echo $row['email'];?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Website" name="website"  value="<?php echo $row['website'];?>"  id="example-text-input">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tax</label>
                                         
                                            <div class="col-sm-10">
                                                <select class="form-control" name="tax">
													
													                                                    <option value="<?php echo $row['tax'];?>" selected style="color:red;"><?php echo $row['tax'];?></option>
													                                                  
													                                                    <option value="6%">6%</option>
                                                                                                       <option value="12%">12%</option>
                                                                                                       <option value="18%">18%</option>
                                                                                                      
                                                                                                   </select>
                                            </div>
                                        </div><div class="form-group row">
                                             <div class="col-sm-4"></div> <div class="col-sm-4">
                                                <input class="form-control btn btn-primary waves-effect waves-light active" type="submit" value="Submit" name="submit" id="example-text-input">
                                            </div>
                                        </div>
                                         
                                         
                                         </form>
                                         
                                         
							<?php } ?>
                                          </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      
<?php 

		
	 if(isset($_POST['submit']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update mainoffice set name='$name',address1='$address1',mobile='$mobile',landline='$landline',email='$email',website='$website',tax='$tax'   where Id='$dlt' ";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  echo "<script>";
		          echo "alert('Updated Successfully')";
		          echo "</script>";
				 	echo'<script>
  window.location= "mainoffice.php?msg=Updated Successfully";
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
                        
                    </div>
                    <!-- container-fluid -->

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