<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}

$id=$_GET['id'];
$check="Delete from company where id='".$id."'";
if (mysqli_query($con,$check)) {
                           echo "Company Deleted";
						   echo '<p><a href="adminActivity.php">Click Here to Check</a></p>';
                           //header('location:homepage.html');
                  } else {
                  echo "Error: ";
                  }        
mysqli_close($con);
?>
