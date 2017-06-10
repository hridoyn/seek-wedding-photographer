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
$name=$_GET['name'];
$username=$_GET['username'];
$email=$_GET['email'];
$pwd1=$_GET['pwd1'];
$pwd2=$_GET['pwd2'];

 $query="UPDATE `company` SET `Name`='$name',`Username`='$username',`Email`='$email',`Password`='$pwd1',`ConfirmPassword`='$pwd2',`id`=$id WHERE `id`=$id";
                  if (mysqli_query($con,$query)) {
                           echo "Company Updated";
						   echo '<p><a href="adminActivity.php">Click Here to Check</a></p>';
                           //header('location:homepage.html');
                  } else {
                  echo "Error: ";
                  }        
mysqli_close($con);
?>