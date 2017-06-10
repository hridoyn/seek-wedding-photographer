<h1>Order Info </h1>

<?php
session_start();
$cname=$_SESSION['uname'];
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
$query="Select id from company where Username='$cname'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
       $id=$row['id'];
	   echo $id;
}
                          
						   //echo '<p><a href="homepage.html">Click						   Here to LOG in</a></p>';
                           //header('location:homepage.html');
//$id=$_GET["abcd"];$usid="";
$jointhree="select * from  order_u
                           INNER JOIN package
                           ON order_u.P_id=package.P_id
							INNER JOIN user 
							ON user.id=order_u.id
                           WHERE package.id='$id'";
$abcd="select * from package where id='$id'";
$sqldata=mysqli_query($con,$jointhree) or die(mysqli_error($con));

?>
  <table>
        <tr>
         <th>Username</th>
            <th>User Email</th>
            <th>Package Name</th>
            <th>Package Cost</th>
            <th>Date</th>
         </tr>
 <?php
 while($row1=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	 ?>
	    <tr >
            <td><?php echo $row1["Username"]; ?></td>
            <td><?php echo $row1["Email"]; ?></td>
            <td><?php echo $row1["PackageName"]; ?></td>
            <td><?php echo $row1["PackageCost"]; ?></td>
 <td><?php echo $row1["Date"]; }?></td>
        </tr>
 </table>
 <?php
 mysqli_close($con);
 ?>