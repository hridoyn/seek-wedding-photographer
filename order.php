<head>
<style>
body{
	background-color:#D3E6EC;
}
input[type=date]{
    width:15%;
	height:5%;
    padding: 12px 25px;
    margin: 8px 0;
    box-sizing: border-box;
	 border: 2px #2980B9;
    border-radius: 4px;
}
select{
	    width:15%;
	height:8%;
    padding: 12px 25px;
    margin: 8px 0;
    box-sizing: border-box;
	 border: 2px #2980B9;
    border-radius: 4px;
	
	
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
<body>





<?php
session_start();
?>
<form  style="color:blue;font-size:20px;font-weight:800;" method="GET" action="placeOrder.php">
PackageName: <select name="pkg">
<?php
$link=mysqli_connect('localhost', 'root', '',"hridoy") or die('Connection error');
//$name=$_GET["q"];
$query1="select * from package
                           INNER JOIN company
                           ON package.id=company.id
                           WHERE company.id='".$_SESSION['idget']."';";
                           
                  $res1=mysqli_query($link,$query1)or die(mysqli_error_list($link));
                           while ($row = mysqli_fetch_array($res1))
                           {
                           echo "<option value=".$row['PackageName'].">".$row['PackageName']."</option>";
                           }
mysqli_close($link);
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
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$query="Select P_id from package where PackageName='wed_diary'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
	$_SESSION['idget']=$row['id'];
}
                          
						   //echo '<p><a href="homepage.html">Click						   Here to LOG in</a></p>';
                           //header('location:homepage.html');
        

mysqli_close($con);
?>


</select>
Date:
<input type="Date" name="date">
<input type="submit" value="submit">
</form>
</body>
</html>
