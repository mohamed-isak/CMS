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
                            <div class="col-12">
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
$pan = $_POST['pan'];
$contact = $_POST['contact'];
   $Number1=$_POST['number1'];
   $Number2= $_POST['number11'];
   $Number3= $_POST['number2'];
   $Number4= $_POST['number21'];
   $Number5= $_POST['number3'];
   $Number6= $_POST['number31'];
$username = $_POST['username'];
$pass = $_POST['pass'];


$target_dir="upload/sign/";
$target_file=$target_dir.basename($_FILES["efile"]["name"]);
if (move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file)) 
{

$sql = "insert into  admin_registration (ANAME,PAN,CONTACT,ID1,ID2,ID3,ID4,ID5,ID6,SIGN,USERNAME,PASSWORD) values ('$name','$pan','$contact','$Number1','$Number2','$Number3','$Number4','$Number5','$Number6','$target_file','$username','$pass')";
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
//Insert Query of SQL

    



?>
<!-------------------------------end------------------------------------->


    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <div class="table-responsive">
     <table class="table table-bordered">

    <tr><td><input type="text" name="name" placeholder="Name" class="form-control name_list"/></td></tr>
    <tr><td><input type="number" name="pan" placeholder="pan" class="form-control name_list"></td></tr>
    <tr><td><textarea  type="contact" name="contact" placeholder="Contact" class="form-control name_list"></textarea></td></tr>
    </table>
     <table class="table table-bordered" id="dynamic_field_of_phone">
                            <tr>
                              
                                <td ><input type="text" name="number1" placeholder="Phone" class="form-control name_list"/></td>
                                <td ><input type="text" name="number11" placeholder="Phone" class="form-control name_list"/></td>
                                <td ><button type="button" name="add" id="addphone" class="btn btn-success">Add More</button></td>
                            </tr>
                        </table>  
      <table class="table table-bordered">
    <tr><td><input type="file" name="efile"  class="form-control name_list"/></td></tr>
    <tr><td><input type="username" name="username" placeholder="User name" class="form-control name_list"/></td></tr>
    <tr><td><textarea name="pass" placeholder="password" class="form-control name_list"></textarea></td></tr>
    
    </table>
 <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
  </div>
  </form>

<!----------------------------------------------------
    End now
----------------------------------------------------->


                         
           </div>
                
        
              
                      </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

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



<script>
$(document).ready(function(){
    var i=1;
  
    var MaxValue=4;
    
   
  //For phone number

    $('#addphone').click(function(){
        i++;
        if(i<MaxValue)
    {
        $('#dynamic_field_of_phone').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" placeholder="IDs" class="form-control name_list" /></td><td><input type="text" name="number'+i+''+1+'" placeholder="IDS" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone">X</button></td></tr>');
     }
    });
     

   // for address 
      

// remove for phone
    $(document).on('click', '.btn_remove_phone', function(){   
        var button_id = $(this).attr("id"); 
       if(i>=1 ){
        i--;           
       }      
        $('#row_phone'+button_id+'').remove();
         if(i>=1){
         i--;
     }
          i=1;
    });
//remove for address
 
    //remove for Events
 
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
