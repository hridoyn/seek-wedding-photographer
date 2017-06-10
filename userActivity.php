<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    border:2px solid green;
}

th, td {
    text-align: left;
    padding: 8px;
    border:1px solid green;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	margin:60px 8px;
}


a:hover, a:active {
    background-color: red;
}
</style>
</head>




<h1>Order Info </h1>

<?php
session_start();
$name=$_SESSION['uname'];
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
$query="Select id from user where Username='$name'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
       $id=$row['id'];
	   //echo $id;
}
                          
						   //echo '<p><a href="homepage.html">Click						   
                           //header('location:homepage.html');
//$id=$_GET["abcd"];$usid="";
$jointhree="select * from  order_u
                           INNER JOIN package
                           ON order_u.P_id=package.P_id
							INNER JOIN user 
							ON user.id=order_u.id
							INNER JOIN company
							ON package.id=company.id
                            WHERE order_u.id='$id'";
//$abcd="select * from package where id='$id'";
$sqldata=mysqli_query($con,$jointhree) or die(mysqli_error($con));

?>
  <table>
        <tr>
         <th>Username</th>
            <th>User Email</th>
            <th>Package Name</th>
			<th>Company Name</th>
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
			<td><?php echo $row1["Name"]; ?></td>
            <td><?php echo $row1["PackageCost"]; ?></td>
 <td><?php echo $row1["Date"]; }?></td>
        </tr>
 </table>
 <?php
 mysqli_close($con);
 ?>
 
 <a href="firstpage2.html">Go Home</a>