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
                                    <h4 class="page-title">Enquiry Contract</h4>
                                </div>
                               
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
        
                                        <form  method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Enquiry Contract</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Contact" name="enq_contract"  id="myInput" onkeyup="myFunction()">
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
		 	
		
		
		 
 $insertss= "Insert into enq_contract(enq_contract,status)values ('$enq_contract','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  echo "<script>";
		          echo "alert('Inserted Successfully')";
		          echo "</script>";
				 	echo'<script>
  window.location= "enquiry.php?msg=Inserted Successfully";
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "enquiry.php";
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
                                            <table class="table mb-0" id="myTable">
                                                <thead class="thead-default">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                       
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                             $qry="SELECT * from enq_contract";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                       
                                                        <td><?php echo $row['enq_contract'];?></td>
                                                       <td><a href="#"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a></td>
                                                        <td><a href="#" ><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></button></a></td>
                                                    </tr>
							<?php $i++;}?>  </tbody>
                                            </table>
                                        </div>   </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                    </div>
       
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
</script>
    </body>

</html>