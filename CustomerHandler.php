<?php
//$name=$_GET['name'];
//$username=$_GET['username'];
//$email=$_GET['email'];
//echo "Your name:".$name."<br>";
//echo "Your name:".$username."<br>";
//echo "your email:".$email."<br>";


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
$check="select * from company where Name='".$name."'";
$res=mysqli_query($con,$check);
while($row=mysqli_fetch_array($res)){
	$m=$row["Name"];
        
}
if($m==$name){
         echo "<br/>Already Subscribed<br/>";
		 echo '<p><a href="CustomerRegistration.html">Try Again</a></p>';
}else {
 $query="Insert into company(Name,Username,Email,Password,ConfirmPassword) values('$name','$username','$email','$pwd1','$pwd2')";
                  if (mysqli_query($con,$query)) {
                           echo "You have sucessfully created an account";
						   echo '<p><a href="homepage2.html">Click Here to LOG in</a></p>';
                           //header('location:homepage.html');
                  } else {
                  echo "Error: ";
                  }        
}
mysqli_close($con);
?>
