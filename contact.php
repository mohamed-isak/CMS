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
    <title>Home
    </title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'>
    </script>
    <style>
      .but{
        padding: 2%;
        margin-right: 2px;
        float: right;
        width: auto;
      }
      <?php $name1=$_GET['name1'];
      $name2=$_GET['name2'];
      ?> .cla<?php echo $name1;
      ?>{
        background:skyblue !important;
      }
      <?php 
      ?> .clas<?php echo $name2;
      ?>{
        background:skyblue !important;
      }
    </style> 
  </head>
  <body>
    <!-- Begin page -->
    <!-- ========== Left Sidebar Start ========== -->
    <?php include('include/header.php');?> 
    <!-- Left Sidebar End -->
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
                <h4 class="page-title">Contact
                </h4>
              </div>
            </div> 
            <!-- end row -->
          </div>
          <!-- end page-title -->
          <!-----------------------Insett Php--------------------->
          <?php
if(isset($_POST['submit']))
{ 
// Get Phone Number
$name=$_POST["name"];
$group1=$_POST["group1"];
$Number1=$_POST["number1"];
$Number2= $_POST["number11"];
$Number3= $_POST["number2"];
$Number4= $_POST["number21"];
$Number5= $_POST["number3"];
$Number6= $_POST["number31"];
$Number7= $_POST["number4"];
$Number8= $_POST["number41"];
$Number9=$_POST["number5"];
$Number10= $_POST["number51"]; 
// Get Address
$Address1= $_POST["address1"];
$Address2= $_POST["address11"];
$Address3= $_POST["address2"];
$Address4= $_POST["address21"];
$Address5= $_POST["address3"];
$Address6= $_POST["address31"];
$Address7= $_POST["address4"];
$Address8= $_POST["address41"];
$Address9=$_POST["address5"];
$Address10= $_POST["address51"]; 
// Get mails
$Mail1=$_POST["email1"];
$Mail2= $_POST["email11"];
$Mail3= $_POST["email2"];
$Mail4= $_POST["email21"];
$Mail5= $_POST["email3"];
$Mail6= $_POST["email31"];
$Mail7= $_POST["email4"];
$Mail8= $_POST["email41"];
$Mail9=$_POST["email5"];
$Mail10= $_POST["email51"]; 
// Get Events
$Event1=$_POST["events1"];
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
$query= "insert into administrator_contact (name,group1,PHONE1,PHONE2,PHONE3,PHONE4,PHONE5,PHONE6,PHONE7,PHONE8,PHONE9,PHONE10,ADDRESS1,ADDRESS2,ADDRESS3,ADDRESS4,ADDRESS5,ADDRESS6,ADDRESS7,ADDRESS8,ADDRESS9,ADDRESS10,EMAIL1,EMAIL2,EMAIL3,EMAIL4,EMAIL5,EMAIL6,EMAIL7,EMAIL8,EMAIL9,EMAIL10,EVENT1,EVENT2,EVENT3,EVENT4,EVENT5,EVENT6,EVENT7,EVENT8,EVENT9,EVENT10) values('$name','$group1','$Number1','$Number2', '$Number3','$Number4','$Number5','$Number6','$Number7','$Number8','$Number9','$Number10',
'$Address1','$Address2', '$Address3','$Address4','$Address5','$Address6','$Address7','$Address8','$Address9','$Address10','$Mail1','$Mail2', '$Mail3','$Mail4','$Mail5','$Mail6','$Mail7','$Mail8','$Mail9','$Mail10','$Event1','$Event2', '$Event3','$Event4','$Event5','$Event6','$Event7','$Event8','$Event9','$Event10')
";
$execute=mysqli_query($connect,$query);
if($execute)
{
echo'<script>
window.location= "contact.php?name1='.$name1.'";
</script>';
} 
else 
{
echo "Error: " . $ex1 . "" . mysqli_error($connect);
}
//Insert Query of SQL
}
?>
          <!--------------------------End------------------->
          <?php    
$name1=$_GET['name1'];
if($name1=='')
{
?>
          <div class="row">
            <div class="col-12">
              <div class="card m-b-30">
                <div class="row">
                  <div class="card-body col-sm-6">
                    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                      <div class="table-responsiv">
                        <table>
                          <tr>
                            <td>
                              <label for="exampleInputPassword1">Name
                              </label>
                              <input type="text" name="name" class="form-control" placeholder="">
                            </td >
                            <td >
                              <label for="exampleInputPassword1">Group
                              </label> 
                             <select class="form-control" name="group1">
                     <?php 
						
                             $qry="SELECT * from group1 where status='C' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
									
								<option value="<?php echo $row['group1']; ?>"><?php echo $row['group1']; ?></option>
							 
							   <?php }?>
							                                                                                                                                                                                                        
                  </select>
                            </td >
                          </tr>
                        </table>
                        <table class="" id="dynamic_field_of_address">
                          <tr>
                            <td>
                              <label for="exampleInputPassword1">Adderss
                              </label>
                              <input name="address1" placeholder="" class="form-control name_list" required>
                            </td>
                            <td>
                              <label for="exampleInputPassword1">
                              </label>
                              <textarea name="address11" placeholder="" class="form-control name_list" required>
                              </textarea>
                            </td>
                            <td >
                              <br>
                              <button type="button" name="addaddress" id="addaddress" class="btn btn-success">+
                              </button>
                            </td>
                           </tr>
                        </table>
                        <table class="" id="dynamic_field_of_phone">
                          <tr>
                            <td >
                              <label for="exampleInputPassword1">Phone
                              </label>
                              <input type="text" name="number1" placeholder="" class="form-control name_list"/>
                            </td>
                            <td >
                              <label for="exampleInputPassword1">Phone
                              </label>
                              <input type="text" name="number11" placeholder="" class="form-control name_list"/>
                            </td>
                            <td >
                              <br>
                              <button type="button" name="add" id="addphone" class="btn btn-success">+
                              </button>
                            </td>
                          </tr>
                        </table>  
                        <table class="" id="dynamic_field_of_mail" >
                          <tr>
                            <td>
                              <label for="exampleInputPassword1">E-mail
                              </label>
                              <input type="text" name="email1" placeholder="" class="form-control name_list" required />
                            </td>
                            <td>
                              <label for="exampleInputPassword1">E-mail
                              </label>
                              <input type="email" name="email11" placeholder="" class="form-control name_list" required />
                            </td>
                            <td >
                              <br>
                              <button type="button" name="addmail" id="addmail" class="btn btn-success">+
                              </button>
                            </td>
                          </tr>
                        </table>
                        <table class="" id="dynamic_field_of_event">
                          <tr>
                            <td>	
                              <label for="exampleInputPassword1">Events
                              </label>
                              <input type="type" name="events1" placeholder="" class="form-control name_list" required />
                            </td>
                            <td>
                              <label for="exampleInputPassword1">Events
                              </label>
                              <input type="date" name="events11" placeholder="" class="form-control name_list" required />
                            </td>
                            <td >
                              <br>
                              <button type="button" name="addevent" id="addevent" class="btn btn-success">+
                              </button>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br></div>
                       <div class="card-body col-sm-6">  
                        <div style="float:right;width:100%">    
                          <button type='submit' name='Delete'  class="form-control btn btn-primary waves-effect waves-light active  but del">
                            <i class="fa fa-trash">
                            </i>
                          </button>     
                          <button type='submit' name='update'  class="form-control btn btn-primary waves-effect waves-light active  but upl">
                            <i class="fas fa-upload">
                            </i>
                          </button>
                          <button type='submit' name='submit'  class="form-control btn btn-primary waves-effect waves-light active  but sub">
                            <i class="fa fa-save">
                            </i>
                          </button>
                          <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="contact.php" >
                            <i class="fa fa-refresh">
                            </i>
                          </a>     
                        </div>
                     
                    </form>
                 
                
                    <h4 class="mt-0 header-title">  
                    </h4>
                    <form  method="POST" enctype="multipart/form-data" >
                      <div class="form-group row">   
                        <div class="col-sm-6">     
                          <input class="form-control" type="text" placeholder="" name="name" value="" id="myInput"  onkeyup="myFunction()"> 
                        </div>
                        <br>
                        <br>
                        <div  id="overflowTest"> 
                          <table class="table mb-0" id="myTable">
                            <tbody>
                              <?php
$qry="SELECT * from administrator_contact order by name asc";
$insertqry = mysqli_query($connect, $qry);
$i=1;
while($row=mysqli_fetch_array($insertqry))
{?>
                              <tr class="<?php echo $row['CID'];?>">
                                <td  style="border-top:none !important;padding:5px;">
                                  <a href="contact.php?name1=<?php echo $row['CID'];?>">
                                    <?php echo $row['name'];?>
                                  </a>
                                </td>
                              </tr>
                              <?php $i++;}?>  
                            </tbody>
                          </table>
                        </div>
 </div>						
</form>						
                        <?php
} 
else
{
$name1=$_GET['name1'];
?>
                        <!------------------Fetch Data---------------->
                        <?php
$name1=$_GET['name1'];
$sql="select * from administrator_contact where CID=$name1";
$ex=mysqli_query($connect,$sql);
$ftv=mysqli_fetch_assoc($ex);
?>
                        <!--------End--------------->
						   <!----------------------------Update----------------------------------->
                                 <?php
                             
                             if(isset($_POST['update']))
                             {

                             $name1=$_GET['name1'];    

// Get Phone Number
   $name=$_POST["name"];
   $group1=$_POST["group1"];
   $Number1=$_POST["number1"];
   $Number2= $_POST["number11"];
   $Number3= $_POST["number2"];
   $Number4= $_POST["number21"];
   $Number5= $_POST["number3"];
   $Number6= $_POST["number31"];
   $Number7= $_POST["number4"];
   $Number8= $_POST["number41"];
   $Number9=$_POST["number5"];
   $Number10= $_POST["number51"]; 
 // Get Address
 $Address1= $_POST["address1"];
   $Address2= $_POST["address11"];
   $Address3= $_POST["address2"];
   $Address4= $_POST["address21"];
   $Address5= $_POST["address3"];
   $Address6= $_POST["address31"];
   $Address7= $_POST["address4"];
   $Address8= $_POST["address41"];
   $Address9=$_POST["address5"];
   $Address10= $_POST["address51"]; 
 // Get mails
 $Mail1=$_POST["email1"];
   $Mail2= $_POST["email11"];
   $Mail3= $_POST["email2"];
   $Mail4= $_POST["email21"];
   $Mail5= $_POST["email3"];
   $Mail6= $_POST["email31"];
   $Mail7= $_POST["email4"];
   $Mail8= $_POST["email41"];
   $Mail9=$_POST["email5"];
   $Mail10= $_POST["email51"]; 
// Get Events
 $Event1=$_POST["events1"];
   $Event2= $_POST["events11"];
   $Event3= $_POST["events2"];
   $Event4= $_POST["events21"];
   $Event5= $_POST["events3"];
   $Event6= $_POST["events31"];
   $Event7= $_POST["events4"];
   $Event8= $_POST["events41"];
   $Event9=$_POST["events5"];
   $Event10= $_POST["events51"]; 

 // update query 
 
 $query= "UPDATE administrator_contact set name='$name',group1='$group1',PHONE1='$Number1',PHONE2='$Number2',PHONE3='$Number3',PHONE4='$Number4',PHONE5='$Number5',PHONE6='$Number6',PHONE7='$Number7',PHONE8='$Number8',PHONE9='$Number9',PHONE10='$Number10',ADDRESS1= '$Address1',ADDRESS2='$Address2',ADDRESS3='$Address3',ADDRESS4='$Address4',ADDRESS5='$Address5',ADDRESS6='$Address6',ADDRESS7='$Address7',ADDRESS8='$Address8',ADDRESS9='$Address9',ADDRESS10='$Address10',EMAIL1='$Mail1',EMAIL2='$Mail2',EMAIL3='$Mail3',EMAIL4='$Mail4'
,EMAIL5='$Mail5',EMAIL6='$Mail6',EMAIL7='$Mail7',EMAIL8='$Mail8',EMAIL9='$Mail9',EMAIL10='$Mail10',EVENT1='$Event1',EVENT2='$Event2',EVENT3='$Event3',EVENT4='$Event4',EVENT5='$Event5',EVENT6='$Event6',EVENT7='$Event7',EVENT8='$Event8',EVENT9='$Event9',EVENT10='$Event10' where CID='$name1'";



$execute=mysqli_query($connect,$query);
if($execute)
{
echo '<script>window.location="contact.php?name1='.$name1.'";</script>';
} 
else 
{
echo '<script>window.location="contact.php?name1='.$name1.'";</script>';
}
}

?>
                      <!-------------------------------------------------------------------->
                     
                        <div class="row">
                          <div class="col-12">
                            <div class="card m-b-30">
                              <div class="row">
                                <div class="card-body col-sm-6">
                                  <form  action="" method="post" enctype="multipart/form-data">
                                    <div class="table-responsiv">
                                      <table>
                                        <tr>
                                          <td >
                                            <label for="exampleInputPassword1">Name
                                            </label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $ftv["name"]; ?>" placeholder="">
                                          </td >
                                          <td >
                                            <label for="exampleInputPassword1">Group
                                            </label> 
                                            <select class="form-control" name="group1">
                                            </select>
                                          </td >
                                        </tr>
                                      </table>
                                      <table class="" id="dynamic_field_of_address1">
                                        <tr>
                                          <td>
                                            <label for="exampleInputPassword1">Adderss
                                            </label>
                                            <input name="address1" value="<?php echo $ftv["ADDRESS1"]; ?>" placeholder="" class="form-control name_list" required>
                                          </td>
                                          <td>
                                            <label for="exampleInputPassword1">
                                            </label>
                                            <textarea name="address11" placeholder="" class="form-control name_list" required>
                                              <?php echo $ftv["ADDRESS2"]; ?>
                                            </textarea>
                                          </td>
                                          <td >
                                            <br>
                                            <button type="button" name="addaddress" id="addaddress" class="btn btn-success">+
                                            </button>
                                          </td>
                                        </tr>
                                      </table>
                                      <table class="" id="dynamic_field_of_phone1">
                                        <tr>
                                          <td >
                                            <label for="exampleInputPassword1">Phone
                                            </label>
                                            <input type="text" name="number1" placeholder="" value="<?php echo $ftv["PHONE1"]; ?>" class="form-control name_list"/>
                                          </td>
                                          <td >
                                            <label for="exampleInputPassword1">Phone
                                            </label>
                                            <input type="text" name="number11" placeholder="" value="<?php echo $ftv["PHONE2"]; ?>" class="form-control name_list"/>
                                          </td>
                                          <td >
                                            <br>
                                            <button type="button" name="add" id="addphone1" class="btn btn-success">+
                                            </button>
                                          </td>
                                        </tr>
                                      </table>  
                                      <table class="" id="dynamic_field_of_mail1" >
                                        <tr>
                                          <td>
                                            <label for="exampleInputPassword1">E-mail
                                            </label>
                                            <input type="text" name="email1" placeholder="" class="form-control name_list" value="<?php echo $ftv["EMAIL1"]; ?>" required />
                                          </td>
                                          <td>
                                            <label for="exampleInputPassword1">E-mail
                                            </label>
                                            <input type="email" name="email11" placeholder="" class="form-control name_list" value="<?php echo $ftv["EMAIL2"]; ?>" required />
                                          </td>
                                          <td >
                                            <br>
                                            <button type="button" name="addmail" id="addmail" class="btn btn-success">+
                                            </button>
                                          </td>
                                        </tr>
                                      </table>
                                      <table class="" id="dynamic_field_of_event1">
                                        <tr>
                                          <td>  
                                            <label for="exampleInputPassword1">Events
                                            </label>
                                            <input type="type" name="events1" placeholder="" value="<?php echo $ftv["EVENT1"]; ?>" class="form-control name_list" required />
                                          </td>
                                          <td>
                                            <label for="exampleInputPassword1">Events
                                            </label>
                                            <input type="date" name="events11" placeholder="" value="<?php echo $ftv["EVENT2"]; ?>" class="form-control name_list" required />
                                          </td>
                                          <td >
                                            <br>
                                            <button type="button" name="addevent" id="addevent" class="btn btn-success">+
                                            </button>
                                          </td>
                                        </tr>
                                      </table>
                                    </div>
                                    </div>
                                    <br>
                                     <div class="card-body col-sm-6">
                                      <!---------------------------Delete---------------------->
                                      <!------------------------------------------------->   
                                      <div style="float:right;width:100%">    
                                        <button type='submit' name='Delete'  class="form-control btn btn-primary waves-effect waves-light active  but del">
                                          <i class="fa fa-trash">
                                          </i>
                                        </button>     
                                        <button type='submit' name='update'  class="form-control btn btn-primary waves-effect waves-light active  but upl">
                                          <i class="fas fa-upload">
                                          </i>
                                        </button>
                                        <button type='submit' name='submit'  class="form-control btn btn-primary waves-effect waves-light active  but sub">
                                          <i class="fa fa-save">
                                          </i>
                                        </button>
                                        <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="contact.php" >
                                          <i class="fa fa-refresh">
                                          </i>
                                        </a>     
                                      </div>
                                  
                                  </form>
                             
                                  <h4 class="mt-0 header-title">  
                                  </h4>
                                  <form  method="POST" enctype="multipart/form-data" >
                                    <div class="form-group row">   
                                      <div class="col-sm-6">     
                                        <input class="form-control" type="text" placeholder="" name="name" value="" id="myInput"  onkeyup="myFunction()"> 
                                      </div>
                                      <br>
                                      <br>
                                      <div  id="overflowTest"> 
                                        <table class="table mb-0" id="myTable">
                                          <tbody>
                                            <?php
$qry="SELECT * from administrator_contact order by name asc";
$insertqry = mysqli_query($connect, $qry);
$i=1;
while($row=mysqli_fetch_array($insertqry))
{?>
                                            <tr class="<?php echo $row['CID'];?>">
                                              <td  style="border-top:none !important;padding:5px;">
                                                <a href="contact.php?name1=<?php echo $row['CID'];?>">
                                                  <?php echo $row['name'];?>
                                                </a>
                                              </td>
                                            </tr>
                                            <?php $i++;}?>  
                                          </tbody>
                                        </table>
                                      </div>                                             
                                    </div>
                                  </form>
                                  <?php }?>
                                </div>  
                              </div>
                            </div>
                          </div> 
                          <!-- end col -->
                        </div> 
                        <!-- end row -->   
                        <!--ADMIN_CONTACT DETAILS -->
                        <div class="row">
                          <div class="col-12">
                            <div class="card m-b-30">
                              <div class="card-body">
                              </div>
                            </div>
                          </div> 
                          <!-- end col -->
                        </div>
                      </div>
                      <footer class="footer">
                        © 2019 Copyrights 
                        <span class="d-none d-sm-inline-block">   
                        </span>.
                      </footer>
                      </div>
                    <!-- ============================================================== -->
                    <!-- End Right content here -->
                    <!-- ============================================================== -->
                  </div>
                  </div>
                  <?php
?>
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
                          }
                          else {
                            tr[i].style.display = "none";
                          }
                        }
                      }
                    }
                  </script>
                  <script>
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
                          }
                          else {
                            tr[i].style.display = "none";
                          }
                        }
                      }
                    }
                  </script>
                  <!-- END wrapper -->
                  <!-- jQuery  -->
                  <script src="assets/js/jquery.min.js">
                  </script>
                  <script src="assets/js/bootstrap.bundle.min.js">
                  </script>
                  <script src="assets/js/metismenu.min.js">
                  </script>
                  <script src="assets/js/jquery.slimscroll.js">
                  </script>
                  <script src="assets/js/waves.min.js">
                  </script>
                  <!-- App js -->
                  <script src="assets/js/app.js">
                  </script>
                  </body>
                <script>
                  $(document).ready(function(){
                    var i=1;
                    var j=1;
                    var k=1;
                    var l=1;
                    var MaxValue=6;
                    //For phone number
                    $('#addphone').click(function(){
                      i++;
                      if(i<MaxValue)
                      {
                        $('#dynamic_field_of_phone').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" placeholder="" class="form-control name_list" /></td><td><input type="text" name="number'+i+''+1+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone">X</button></td></tr>');
                      }
                    }
                                        );
                    // for address 
                    $('#addaddress').click(function(){
                      j++;
                      if(j<MaxValue)
                      {
                        $('#dynamic_field_of_address').append('<tr id="row_address'+j+'"><td><input type="text" name="address'+j+'" class="form-control name_list" ></td><td><textarea name="address'+j+''+1+'" placeholder="" class="form-control name_list" ></textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address">X</button></td></tr>');
                      }
                    }
                                          );
                    // for mail
                    $('#addmail').click(function(){
                      k++;
                      if(k<MaxValue)
                      {
                        $('#dynamic_field_of_mail').append('<tr id="row_mail'+k+'"><td><input type="email" name="email'+k+'" placeholder="" class="form-control name_list"  /></td><td><input type="email" name="email'+k+''+1+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_mail">X</button></td></tr>');
                      }
                    }
                                       );
                    // for events
                    $('#addevent').click(function(){
                      l++;
                      if(l<MaxValue)
                      {
                        $('#dynamic_field_of_event').append('<tr id="row_event'+l+'"><td><input type="text" name="events'+l+'" placeholder="" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_event">X</button></td></tr>');
                      }
                    }
                                        );
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
                    }
                                  );
                    //remove for address
                    $(document).on('click', '.btn_remove_address', function(){
                      var button_id = $(this).attr("id");
                      if(j>=1 ){
                        j--;
                      }
                      $('#row_address'+button_id+'').remove();
                      if(j>=1){
                        j--;
                      }
                      j=1;
                    }
                                  );
                    // remove for Email
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
                    }
                                  );
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
                    }
                                  );
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
                      }
                            );
                    }
                                      );
                  }
                                   );
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
                    $name1=$_GET['name1'];
                    $sql="select * from administrator_contact where CID=$name1";
                    $ex=mysqli_query($connect,$sql);
                    $ftv5=mysqli_fetch_assoc($ex);
                    ?>
                      //get address
                      var address3="<?php echo $ftv5["ADDRESS3"];?>";
                    var address4="<?php echo $ftv5["ADDRESS4"];?>";
                    var address5="<?php echo $ftv5["ADDRESS5"];?>";
                    var address6="<?php echo $ftv5["ADDRESS6"];?>";
                    var address7="<?php echo $ftv5["ADDRESS7"];?>";
                    var address8="<?php echo $ftv5["ADDRESS8"];?>";
                    var address9="<?php echo $ftv5["ADDRESS7"];?>";
                    var address10="<?php echo $ftv5["ADDRESS8"];?>";
                    //get phone 
                    var phone3="<?php echo $ftv5["PHONE3"];?>";
                    var phone4="<?php echo $ftv5["PHONE4"];?>";
                    var phone5="<?php echo $ftv5["PHONE5"];?>";
                    var phone6="<?php echo $ftv5["PHONE6"];?>";
                    var phone7="<?php echo $ftv5["PHONE7"];?>";
                    var phone8="<?php echo $ftv5["PHONE8"];?>";
                    var phone9="<?php echo $ftv5["PHONE9"];?>";
                    var phone10="<?php echo $ftv5["PHONE10"];?>";
                    //get Email
                    var email3="<?php echo $ftv5["EMAIL3"];?>";
                    var email4="<?php echo $ftv5["EMAIL4"];?>";
                    var email5="<?php echo $ftv5["EMAIL5"];?>";
                    var email6="<?php echo $ftv5["EMAIL6"];?>";
                    var email7="<?php echo $ftv5["EMAIL7"];?>";
                    var email8="<?php echo $ftv5["EMAIL8"];?>";
                    var email9="<?php echo $ftv5["EMAIL8"];?>";
                    var email10="<?php echo $ftv5["EMAIL8"];?>";
                    // get Events
                    var events3="<?php echo $ftv5["EVENT3"];?>";
                    var events4="<?php echo $ftv5["EVENT4"];?>";
                    var events5="<?php echo $ftv5["EVENT5"];?>";
                    var events6="<?php echo $ftv5["EVENT6"];?>";
                    var events7="<?php echo $ftv5["EVENT7"];?>";
                    var events8="<?php echo $ftv5["EVENT8"];?>";
                    var events9="<?php echo $ftv5["EVENT9"];?>";
                    var events10="<?php echo $ftv5["EVENT10"];?>";
                    // get Events
                    var events3="<?php echo $ftv5["EVENT3"];?>";
                    var events4="<?php echo $ftv5["EVENT4"];?>";
                    var events5="<?php echo $ftv5["EVENT5"];?>";
                    var events6="<?php echo $ftv5["EVENT6"];?>";
                    var events7="<?php echo $ftv5["EVENT7"];?>";
                    var events8="<?php echo $ftv5["EVENT8"];?>";
                    var events9="<?php echo $ftv5["EVENT9"];?>";
                    var events10="<?php echo $ftv5["EVENT10"];?>";
                    if(x==1){
                      i++;
                      $('#dynamic_field_of_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone3+'"    placeholder="" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone4+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
                    }
                    if(x==1)
                    {
                      i++;
                      $('#dynamic_field_of_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone5+'"    placeholder="" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone6+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
                    }
                    if(x==1){
                      i++;
                      $('#dynamic_field_of_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone7+'"    placeholder="" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone8+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
                    }
                    if(x==1){
                      i++;
                      $('#dynamic_field_of_phone1').append('<tr id="row_phone'+i+'"><td><input type="text" name="number'+i+'" value="'+phone8+'"    placeholder="" class="form-control name_list" /></td><td><input type="number" name="number'+i+''+1+'" value="'+phone9+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_phone1">X</button></td></tr>');
                    }
                    //add adress
                    if(y==1){
                      j++;
                      $('#dynamic_field_of_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="" class="form-control name_list" >'+address3+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="" class="form-control name_list" >'+address4+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
                    }
                    if(y==1)
                    {
                      j++;
                      $('#dynamic_field_of_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="" class="form-control name_list" >'+address5+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="" class="form-control name_list" >'+address6+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
                    }
                    if(y==1)
                    {
                      j++;
                      $('#dynamic_field_of_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="" class="form-control name_list" >'+address7+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="" class="form-control name_list" >'+address8+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
                    }
                    if(y==1)
                    {
                      j++;
                      $('#dynamic_field_of_address1').append('<tr id="row_address'+j+'"><td><textarea name="address'+j+'"  placeholder="" class="form-control name_list" >'+address9+'</textarea></td><td><textarea name="address'+j+''+1+'" placeholder="" class="form-control name_list" >'+address10+'</textarea></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove_address1">X</button></td></tr>');
                    }
                    //add email
                    if(z==1){
                      k++;
                      $('#dynamic_field_of_mail1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="" value="'+email3+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email4+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
                    }
                    if(z==1){
                      k++;
                      $('#dynamic_field_of_mail1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="" value="'+email5+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email6+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
                    }
                    if(z==1){
                      k++;
                      $('#dynamic_field_of_mail1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="" value="'+email7+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email8+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
                    }
                    if(z==1){
                      k++;
                      $('#dynamic_field_of_mail1').append('<tr id="row_email'+k+'"><td><input type="text" name="email'+k+'" placeholder="" value="'+email9+'" class="form-control name_list" /></td><td><input type="text" name="email'+k+''+1+'"  value="'+email10+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove_email1">X</button></td></tr>');
                    }
                    if(u==1){
                      l++;
                      $('#dynamic_field_of_event1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events3+'" placeholder="" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events4+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
                    }
                    if(u==1){
                      l++;
                      $('#dynamic_field_of_event1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events5+'" placeholder="" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events6+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
                    }
                    if(u==1){
                      l++;
                      $('#dynamic_field_of_event1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events7+'" placeholder="" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events8+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
                    }
                    if(u==1){
                      l++;
                      $('#dynamic_field_of_event1').append('<tr id="row_events'+l+'"><td><input type="text" name="events'+l+'" value="'+events9+'" placeholder="" class="form-control name_list" /></td><td><input type="text" name="events'+l+''+1+'" value="'+events10+'" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+l+'" class="btn btn-danger btn_remove_events1">X</button></td></tr>');
                    }
                  }
                                   );
                </script>
                </html>
