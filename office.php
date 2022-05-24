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
						
</style>  </head>

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
                                    <h4 class="page-title">Office</h4>
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
                                          
                                      
                                       
                                   
                                   
                                  <?php $name1=$_GET['name1']; 										if($name1==''){ ?>        <div class="col-sm-8">     
								  <input class="form-control" type="text" placeholder="" name="workcategoryup" value="" id="example-text-input"><input class="form-control" type="text" placeholder="Company Name" name="role" value="main" id="example-text-input" style="display:none;">
                                         
                                    
                                                <input class="form-control" type="text" placeholder="Company Name" name="main" value="workcategory" id="myInput" onkeyup="myFunction()" style="display:none;"> </div> <div class="col-sm-4">  
<button type='submit' name='Delete'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button> <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="office.php?name1=<?php echo $name1;?>&name2=<?php echo $name1;?>&office=<?php echo $name1;?>" ><i class="fa fa-ellipsis-v"></i></a>                     
                          <button type='submit' name='Update'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                              
                         <button type='submit' name='submited'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button>
						  <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="office.php" ><i class="fas fa-plus"></i></a>
						 
                           </div> <?php } $name1=$_GET['name1']; ?>
                                          <?php 
                             $qry="SELECT * from office where role='main' AND Id='$name1' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?><div class="col-sm-8"> <input class="form-control" type="text" placeholder="" name="workcategoryup" value="<?php echo $row['workcategory']; ?>" id="myInput"  onkeyup="myFunction()"> 
                                                <input class="form-control" type="text" placeholder="Company Name" name="role" value="main" id="example-text-input" style="display:none;">
                                         
                                    
                                                <input class="form-control" type="text" placeholder="Company Name" name="main" value="workcategory" id="example-text-input"  style="display:none;">
                                             
                                             
                                            </div>
											
											
											
                           
                          <div class="col-sm-4">   

 <button type='submit' name='Delete'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button> 						  
                     <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="office.php?name1=<?php echo $name1;?>&name2=<?php echo $name1;?>&office=<?php echo $name1;?>" ><i class="fa fa-ellipsis-v"></i></a>
            <button type='submit' name='Update'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                             
                         <button type='submit' name='submited'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button>
						   <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="office.php" ><i class="fas fa-plus"></i></a>
                           </div>
                           
                           <?php }
                             $qry="SELECT * from office where role='main' AND Id='$name1' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?> 
                                                <input class="form-control" type="text" placeholder="Category" name="Id1" value="<?php echo $row['Id']; ?>" id="example-text-input" style="display:none">	
                                             
                                             <?php }?> 
                                          
                                             
                                            
                                           
                                      
                                          </div></form>
                                 <div  id="overflowTest"> <table class="table mb-0" id="myTable">
                                               
                                                <tbody><?php
                             $qry="SELECT * from office where role='main' AND status='C' order by workcategory asc";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr class="cla<?php echo $row['Id'];?>">
                                                         <td  style="border-top:none !important;padding:5px;"><a href="office.php?name1=<?php echo $row['Id'];?>"><?php echo $row['workcategory'];?></a></td>
                                                       
                                                       
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
                             $qry="SELECT * from office where role='main' AND  Id='$name1'  AND status='C'  ";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                       
                                                <input class="form-control" type="text" placeholder="Company Name" name="main1" value="<?php echo $row['Id'];?>" id="example-text-input" style="display:none;">
							<?php } ?>
                                    <?php  $name2=$_GET['name2']; ?>
                                                      <?php 
                             $qry="SELECT * from office where role='branch' AND Id='$name2' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            { $workcategory=$row['workcategory'];}?>    
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" placeholder="" name="workcategoryup1" value="<?php echo $workcategory; ?>"  id="myInput1" onkeyup="myFunctio()" >
                                            </div>
                                             <div class="col-sm-4">
 <button type='submit' name='Delete1'  class="form-control btn btn-primary waves-effect waves-light active  but del"><i class="fa fa-trash"></i></button>											 
                           					  
                     <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="office.php?name1=<?php echo $name1;?>&name2=<?php echo $name2;?>&office1=<?php echo $name2;?>" ><i class="fa fa-ellipsis-v"></i></a>
                           <button type='submit' name='Update1'  class="form-control btn btn-primary waves-effect waves-light active  but upl"><i class="fas fa-upload"></i></button>
                                            
                         <button type='submit' name='Save1'  class="form-control btn btn-primary waves-effect waves-light active  but sub"><i class="fa fa-save"></i></button> 
						   <a  class="form-control btn btn-primary waves-effect waves-light active  but "  href="office.php?name1=<?php echo $name1;?>" ><i class="fas fa-plus"></i></a>
						 
                           </div> <?php 
                             $qry="SELECT * from office where role='branch' AND Id='$name2' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row=mysqli_fetch_array($insertqry))
                            {?> 
                                                <input class="form-control" type="text" placeholder="Category" name="Id2" value="<?php echo $row['Id']; ?>" id="example-text-input" style="display:none">	
                                             
                                             <?php }?> 
                                         </div></form>  <div  id="overflowTest"> <table class="table mb-0"  id="myTable1">
                                               
                                                <tbody><?php 
                             $qry="SELECT * from office where role='branch' AND main='$name1' AND status='C'  order by workcategory asc";
							 $insertqry = mysqli_query($connect, $qry);
                             $i=1;
                             while($row=mysqli_fetch_array($insertqry))
                            {?>
                                                    <tr  class="clas<?php echo $row['Id'];?>">
                                                         <td  style="border-top:none !important;padding:5px;"><a href="office.php?name1=<?php echo $row['main'];?>&name2=<?php echo $row['Id'];?>"><?php echo $row['workcategory'];?></a></td>
                                                       
                                                       
                                                    </tr>
							<?php $i++;}?>  </tbody>
                                            </table>
                                       </div>   
                                      </div>
                               
                                        </div>
                                    <div class="row"><?php $office=$_GET['office']; if($office==''){} else{ ?>
                                    <div class="card-body col-sm-6"> <?php 
                             $qry="SELECT * from office where  Id='$name1' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row12=mysqli_fetch_array($insertqry))
                            {?><?php if($row12['name']==''){?> <form  method="POST" enctype="multipart/form-data">
                                       <h4 style="font-size:17px;"> &nbsp;Main Office: <?php echo $row12['workcategory']; ?></h4>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Company Name</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="mname" value="<?php echo $row12['name'];?>" id="example-text-input">
                                            </div>
                                      
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Secondary </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="msecondary" value="<?php echo $row12['secondary'];?>" id="example-text-input">
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Address</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="maddress" value="<?php echo $row12['address'];?>"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Mobile</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="mmobile" value="<?php echo $row12['mobile'];?>" id="example-text-input">
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="email" name="memail" value="<?php echo $row12['email'];?>" id="example-text-input">
                                            </div><label for="example-text-input" class="col-sm-12 col-form-label">Website</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="mwebsite" value="<?php echo $row12['website'];?>" id="example-text-input">
                                            </div>
                                        </div>
                                        </div>
                                         <div class="form-group row">
                                             <div class="col-sm-4"></div> <div class="col-sm-4">
                                                <input class="form-control btn btn-primary waves-effect waves-light active" type="submit" value="Submit" name="submitmain" id="example-text-input">
                                            </div>
							</div></form><?php }else{ ?>  <form  method="POST" enctype="multipart/form-data">
                                       <h4 style="font-size:17px;"> &nbsp;Main Office: <?php echo $row12['workcategory']; ?></h4>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label"><?php echo $row12['name'];?></label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="mname" value="<?php echo $row12['name'];?>" id="example-text-input" readonly>
                                            </div>
                                      
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Secondary </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="msecondary" value="<?php echo $row12['secondary'];?>" id="example-text-input" readonly>
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Address</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="maddress" value="<?php echo $row12['address'];?>"  id="example-text-input" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Mobile</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="mmobile" value="<?php echo $row12['mobile'];?>" id="example-text-input" readonly>
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="email" name="memail" value="<?php echo $row12['email'];?>" id="example-text-input" readonly>
                                            </div><label for="example-text-input" class="col-sm-12 col-form-label">Website</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="mwebsite" value="<?php echo $row12['website'];?>" id="example-text-input" readonly>
                                            </div>
                                        </div>
                                        </div>
                                        </form><?php }} ?>
        </div>
									<?php }?>   
<?php $office1=$_GET['office1']; if($office1==''){} else{ ?>
                                    <div class="card-body col-sm-6"> <?php 
                             $qry="SELECT * from office where  Id='$name2' ";
							 $insertqry = mysqli_query($connect, $qry);
                           
                             while($row13=mysqli_fetch_array($insertqry))
                            {?><?php if($row13['name']==''){?> <form  method="POST" enctype="multipart/form-data">
                                       <h4 style="font-size:17px;"> &nbsp;Sub Office: <?php echo $row12['workcategory']; ?></h4>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Company Name</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="cname" value="<?php echo $row13['name'];?>" id="example-text-input">
                                            </div>
                                      
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Secondary </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="csecondary" value="<?php echo $row13['secondary'];?>" id="example-text-input">
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Address</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="caddress" value="<?php echo $row13['address'];?>"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Mobile</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="cmobile" value="<?php echo $row13['mobile'];?>" id="example-text-input">
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="email" name="cemail" value="<?php echo $row13['email'];?>" id="example-text-input">
                                            </div><label for="example-text-input" class="col-sm-12 col-form-label">Website</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="cwebsite" value="<?php echo $row13['website'];?>" id="example-text-input">
                                            </div>
                                        </div>
                                        </div>
                                         <div class="form-group row">
                                             <div class="col-sm-4"></div> <div class="col-sm-4">
                                                <input class="form-control btn btn-primary waves-effect waves-light active" type="submit" value="Submit" name="submitmain" id="example-text-input">
                                            </div>
							</div></form><?php }else{ ?>  <form  method="POST" enctype="multipart/form-data">
                                       <h4 style="font-size:17px;"> &nbsp;Sub Office: <?php echo $row13['workcategory']; ?></h4>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label"><?php echo $row13['name'];?></label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="cname" value="<?php echo $row13['name'];?>" id="example-text-input" readonly>
                                            </div>
                                      
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Secondary </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="csecondary" value="<?php echo $row13['secondary'];?>" id="example-text-input" readonly>
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Address</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="caddress" value="<?php echo $row13['address'];?>"  id="example-text-input" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Mobile</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="cmobile" value="<?php echo $row13['mobile'];?>" id="example-text-input" readonly>
                                            </div> <label for="example-text-input" class="col-sm-12 col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="email" name="cemail" value="<?php echo $row13['email'];?>" id="example-text-input" readonly>
                                            </div><label for="example-text-input" class="col-sm-12 col-form-label">Website</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"  name="cwebsite" value="<?php echo $row13['website'];?>" id="example-text-input" readonly>
                                            </div>
                                        </div>
                                        </div>
                                        </form><?php }} ?>
        </div>
									<?php }?>   

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
		 	
		
		
		 
 $insertss= "Insert into office(workcategory,role,main,status)values ('$workcategoryup','$role','$main','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "office.php??name1='.$name1.'";
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "office.php?name1='.$name1.'";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	
		
	 if(isset($_POST['Save1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "Insert into office(workcategory,role,main,status)values ('$workcategoryup1','$role1','$main1','C')";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "office.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "office.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 } 
		
		
		
		if(isset($_POST['Update']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update office set workcategory='$workcategoryup' where Id='$Id1'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "office.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "office.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
		if(isset($_POST['Delete']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update office set status='D' where Id='$Id1'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "office.php"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "office.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }
	if(isset($_POST['Update1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update office set workcategory='$workcategoryup1' where Id='$Id2'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				 
				 	echo'<script>
  window.location= "office.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "office.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
if(isset($_POST['Delete1']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update office set status='D' where Id='$Id2'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  
				 	echo'<script>
  window.location= "office.php"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "office.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }	
	?>
	
	
	<?php if(isset($_POST['submitmain']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update office set name='$mname',mobile='$mmobile',secondary='$msecondary',email='$memail',address='$maddress',website='$mwebsite' where Id='$name1'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {	
		
		 
 $inser= "Insert into contact(name,mobile,secondary,email,address,status)values ('$mname','$mmobile','$msecondary','$memail','$maddress','C')";
		 $seresins1=mysqli_query($connect, $inser);	
		 
				 if($seresins1){
				 	echo'<script>
  window.location= "office.php?name1='.$name1.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }}
			 else
			 { 
			     	echo'<script>
  window.location= "office.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }?>
	
	
	
	<?php if(isset($_POST['submitsub']))
	  {
		  
		  
	 extract($_POST);
		 	
		
		
		 
 $insertss= "update office set name='$cname',mobile='$cmobile',secondary='$csecondary',email='$cemail',address='$caddress',website='$cwebsite' where Id='$name2'";
		 $seresins=mysqli_query($connect, $insertss);	
		 
			 if($seresins)
			  {
				  
 $inserts= "Insert into contact(name,mobile,secondary,email,address,status)values ('$cname','$cmobile','$csecondary','$cemail','$caddress','C')";
		 $seresins1=mysqli_query($connect, $inserts);	
		 
				 if($seresins1){
				 	echo'<script>
  window.location= "office.php?name1='.$name1.'&name2='.$name2.'"
</script>';
			//	header("location:news.php?msg=Inserted Successfully");
			  }
			  }
			 else
			 { 
			     	echo'<script>
  window.location= "office.php";
</script>';
			//	header("location:news.php?msg=Insertion Error");
			 }
		 }?>
	
	
	
	
	
	
	
	
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