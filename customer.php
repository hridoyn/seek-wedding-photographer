<!Doctype html>
<html>
<head>
<style>
.name{
	color:blue;
	font-size:20px;
	font-weight:800;
}
body{
	background-color: #D3E6EC;
	
}
</style>
</head>
<body>

<?php
Session_start();
$username=$_GET['username'];
if($username==""){
	echo "Name is not provided";
}
$password=$_GET['password'];
if($password==""){
	echo "password is not provided";
	
}
$_SESSION['uname']=$_GET['username'];
$_SESSION['password']=$_GET['password'];

//mysql_connect("localhost","root","");
//mysql_select_db("hridoy");
/*$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$check="select * from user where Username='$username' and Password='$password'";
$res=mysqli_query($con,$check);
while($row=mysqli_fetch_array($res)){
if($row['Username']== $username && $row['Password']== $password){
echo "Welcome:".$row['Username'];
echo '<p><a href="homepageLogout.php">Log Out</a></p>';
}
else
{
echo "login failed";
echo '<p><a href="homepage.html">Go Back</a></p>';
}
}
mysqli_close($con);*/
require("mySqlToJSON.php");
$jsonData= getJSONFromDB("select * from company where Username='$username' and Password='$password'");
if($jsn=json_decode($jsonData,true)){
for($i=0;$i<sizeof($jsn);$i++){
		echo  "<span class='name'>" ."Welcome:"." ".$jsn[$i]['Username']."<br>"."</span>";
		
	echo '<form action="firstpage3.html">
    <input type="submit" value="Click to begin" />
</form>';
}
}
else{
echo "login failed"."<br>";
echo "please check your username and password";
echo '<p><a href="homepage2.html">Go Back</a></p>';
}
	
?>
</body>
</html>