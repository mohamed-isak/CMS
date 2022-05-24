<?php

session_start();
if ( isset($_SESSION['login']))
{
	
}
else{
		
				  
		    echo'
			 <script>
			 window.location= "index.php?Login First";
			 </script>
			 ';
			
}
?>