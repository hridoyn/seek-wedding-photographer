<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$name=$_GET['name'];
$username=$_GET['username'];
$gender=$_GET['gender'];
$email=$_GET['email'];
$pwd1=$_GET['pwd1'];
$pwd2=$_GET['pwd2'];

$m="";
$check="select * from user where Username='".$username."'";
$res=mysqli_query($con,$check);
while($row=mysqli_fetch_array($res)){
	$m=$row["Username"];
        
}
if($m==$username){
         echo "<br/>Username already taken<br/>";
		 echo '<p><a href="addUser.html">Try Again</a></p>';
}else {
 $query="Insert into user(Name,Username,Gender,Email,Password,ConfirmPassword) values('$name','$username','$gender','$email','$pwd1','$pwd2')";
                  if (mysqli_query($con,$query)) {
                           echo "User Added";
						   echo '<p><a href="adminActivity.php">Click Here to Check</a></p>';
                           //header('location:homepage.html');
                  } else {
                  echo "Error: ";
                  }        
}
mysqli_close($con);
?>
