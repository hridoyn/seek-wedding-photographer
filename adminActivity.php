<!Doctype html>
<html>
<head>
<style>
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
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

</style>
</head>
<body>


<h1>User Info </h1>
<?php

$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$sqlget="select *from user";
$sqldata=mysqli_query($con,$sqlget) or die('error');
echo "<table width='100%'>";
echo "<tr><th>Name</th><th>Username</th><th>Gender</th><th>Email</th><th>id</th></tr>";
while($row= mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
echo "<tr><td>";
echo $row['Name'];
echo "</td><td>";
echo $row['Username'];
echo "</td><td>";
echo $row['Gender'];
echo "</td><td>";
echo $row['Email'];
echo "</td> <td>";
echo $row['id'];
echo "</td> </tr>";
}
echo "<table>";
?>

<h1>Company Info</h1>
<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$sqlget="select *from company";
$sqldata=mysqli_query($con,$sqlget) or die('error');

echo "<table width='100%'>";
echo "<tr><th>Name</th><th>Username</th><th>Email</th><th>id</th></tr>";
while($row= mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
echo "<tr> <td>";
echo $row['Name'];
echo "</td> <td>";
echo $row['Username'];
echo "</td> <td>";
echo $row['Email'];
echo "</td> <td>";
echo $row['id'];
echo "</td> </tr>";


}
echo "<table>";
?>
<a href="addUser.html">Add User </a><br>
<br>
<a href="deleteUser.html">Delete User</a><br>
<br>
<a href="updateUser.html">Update User</a><br>
</br>

<a href="addCompany.html">Add Company </a><br>
<br>
<a href="deleteCompany.html">Delete Company</a><br>
<br>
<a href="updateCompany.html">Update Company</a><br>
<br>

<a href="firstpage4.html">Go Home</a><br>

</body>
</html>
