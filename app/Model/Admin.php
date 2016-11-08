	
<?php
class Admin extends AppModel { 
	if($_SESSION['usertype']=="admin";)
   header("location:admin.php");
else header("location:index.php");  
}
