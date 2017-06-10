<head>
<style>
p{
	
	font-weight:800;
	font-color:blue;
}


</style>
</head>



<?Php
session_start();
$name=$_GET['pkg'];
$date=$_GET['date'];
$uname=$_SESSION['uname'];
$uid="";
//echo $name;
//echo $date;

?>

<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}

$query="Select P_id from package where PackageName='$name'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
	$pid=$row['P_id'];
	//echo $pid;
}
$query2="Select id from user where Username='$uname'";
$res1=mysqli_query($con,$query2);
while($row1=mysqli_fetch_array($res1)){
	$uid=$row1['id'];
	//echo $uid;
}
$query3="INSERT INTO `order_u`(`P_id`, `id`, `Date`) VALUES ('$pid','$uid','$date')";
if (mysqli_query($con,$query3)) {
                           echo "<p>Successful order</p>";
						   echo '<p><a href="firstpage2.html">Go Home</a></p>';
                           //header('location:homepage.html');
                  } else {
                  echo "Error ";
                  }   				 
	mysqli_close($con);

?>
