<?php include('db.php');?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Home Page</title>
        <meta content="" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Sign in to continue to Home.</h5>
    
                        <form class="form-horizontal m-t-30" method="post">
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Username</label>
                                    <input class="form-control" type="text"  placeholder="Username" name="Username">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" type="password"  placeholder="Password" name="Password">
                                </div>
                            </div>
    
                           
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                 <input type="submit" name="Login" class="btn btn-primary btn-block btn-lg waves-effect waves-light" value="LOGIN"> 
                                </div>
                            </div>
    
                          
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->
<?php
		if(isset($_POST['Login']))
		 {
			 extract($_POST);
			 
			 $password = $_POST['Password'];
			 	
		 $selloginff = "select * from login_tbl where status='C' and username='$Username' and password='$password'";
		 $sellogin = mysqli_query($connect, $selloginff);
		 $fetchuser = mysqli_fetch_array($sellogin);
		 $selnumrows = mysqli_num_rows($sellogin);
		
		 if($selnumrows > 0)
		 {	 session_start();
	  $_SESSION['login']= true;
		    echo'
			 <script>
			 window.location= "mainoffice.php";
			 </script>
			 ';
		 }
		 else
		 {
			  echo'
			 <script>
			 window.location= "index.php?msg=Password wrong";
			 </script>
			 ';
			}
	
	  }
							
	?>        
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