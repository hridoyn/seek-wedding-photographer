<?php
//$name=$_GET['name'];
//$username=$_GET['username'];
//$email=$_GET['email'];
//echo "Your name:".$name."<br>";
//echo "Your name:".$username."<br>";
//echo "your email:".$email."<br>";

/*$gender= $_GET['gender'];
if ($gender == "male") {          
    echo 'Gender:male';      
}
else {
    echo 'Gender:female';
}*/
//echo "You have successfully completed registration";

$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$name=$_GET['name'];
if (empty($_GET["name"])) {
echo "Name is required";
} 
$username=$_GET['username'];
if (empty($_GET["username"])) {
echo "Username is required";
}
$gender=$_GET['gender'];
if (empty($_GET["gender"])) {
echo "gender is required";
}
$email=$_GET['email'];
 if (empty($_GET["email"])) {
    echo "EmailId is required";
  }
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo "Invalid email format";
	}
  
$pwd1=$_GET['pwd1'];
if (empty($_GET["pwd1"])) {
    echo "Password is required";
  }
$pwd2=$_GET['pwd2'];
if (empty($_GET["pwd2"])) {
    echo "Confirmation of Password is required";
  }
   if(!empty($_GET["pwd1"]) && ($_GET["pwd1"] == $_GET["pwd2"])) {
    $pwd1=$_GET["pwd1"];
    $pwd2=$_GET["pwd2"];
    if (strlen($_GET["pwd1"]) <'8') {
        echo "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $pwd1)) {
        echo "Your Password Must Contain At Least 1 special character!";
    }
    
}
elseif(!empty($_GET["pwd1"])) {
    echo "Please Check You've Entered Or Confirmed Your Password Correctly!";
}
$m="";
$check="select * from user where Username='".$username."'";
$res=mysqli_query($con,$check);
while($row=mysqli_fetch_array($res)){
	$m=$row["Username"];
        
}
if($m==$username){
         echo "<br/>Username already taken<br/>";
		 echo '<p><a href="myForm.html">Try Again</a></p>';
}else {
 $query="Insert into user(Name,Username,Gender,Email,Password,ConfirmPassword) values('$name','$username','$gender','$email','$pwd1','$pwd2')";
                  if (mysqli_query($con,$query)) {
                           echo "You have sucessfully created an account";
						   echo '<p><a href="homepage.html">Click Here to LOG in</a></p>';
                           //header('location:homepage.html');
                  } else {
                  echo "Error: ";
                  }        
}
mysqli_close($con);
?>
