<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}

$id=$_GET[id];
if(isset[$_get['Delete']){
$query="Delete from user where id='".$id."'";

 if (mysqli_query($con,$query)) {
 echo "User added ";
 
 else{
	 echo "Data not deleted";
 }
 
 }