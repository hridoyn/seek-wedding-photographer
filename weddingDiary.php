<head>
<style>
body{
background-color:#ECD8D3
}
input[type=submit] {
    background-color:#2980B9  ;
    border: none;
    color: white;
    padding: 14px 25px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	
}
</style>
</head>





<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1> Welcome to Wedding Diary Bangladesh </h1>
<h2>Packages Are Shown Below</h2>
<h3>Essential</h3>
<p>Prito Reza:No</p>
<p>Photographers:1 senior</p>
<p>Number Of Prints:100 Copies 4R & 1 copy 12L</p>
<p>Digital Album / Photo Book:Yes</p>
<p>Number of Photos:Unlimited</p>
<p>Special Edited Photos:100</p>
<p>Hours:5</p>
<p>Package Price:10000</p>
<h3>Economy:</h3>
<p>Prito Reza:No</p>
<p>Photographers:1 Top Photographer</p>
<p>Number Of Prints:100 Copies 4R & 1 copy 12L</p>
<p>Digital Album / Photo Book:Yes</p>
<p>Number of Photos:Unlimited</p>
<p>Special Edited Photos:100</p>
<p>Hours:5</p>
<p>Package Price:15000</p>
<h3>Smart</h3>
<p>PritoReza:No</p>
<p>Photographers:2 Senior Photographer</p>
<p>Number Of Prints:100 Copies 4R & 1 copy 12L</p>
<p>Digital Album / Photo Book:Yes</p>
<p>Number of Photos:Unlimited</p>
<p>Special Edited Photos:100</p>
<p>Hours:5</p>
<p>Package Price:20000</p>
<h3>Standard</h3>
<p>Prito Reza:No</p>
<p>Photographers:2 Top Photographer</p>
<p>Number Of Prints:100 Copies 4R & 1 copy 12L</p>
<p>Digital Album / Photo Book:Yes</p>
<p>Number of Photos:Unlimited</p>
<p>Special Edited Photos:100</p>
<p>Hours:5</p>
<p>Package Price:30000</p>
<h3>Premium</h3>
<p>Prito Reza:No</p>
<p>Photographers:2 Top & 3 Sr Photographer</p>
<p>Number Of Prints:100 Copies 4R & 1 copy 12L</p>
<p>Digital Album / Photo Book:Yes</p>
<p>Number of Photos:Unlimited</p>
<p>Special Edited Photos:100</p>
<p>Hours:5</p>
<p>Package Price:60,000</p>

<h4>**** If you want our chief photographer 
Prito Reza love to join your program at 30,000 BDT per hour</h4>
<?php

$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$query="Select id from company where Username='wed_diary'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
	$_SESSION['idget']=$row['id'];
}
                          
						   //echo '<p><a href="homepage.html">Click						   Here to LOG in</a></p>';
                           //header('location:homepage.html');
        

mysqli_close($con);
?>
<?php
if((isset($_SESSION['uname']) && $_SESSION['uname']!="")){
	echo "<form action='order.php'>
<input type='submit' value='Click to Book'></input>
</form>";
}else
{
	
}
?>
</body>
</html>