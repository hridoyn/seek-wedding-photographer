<?php
session_start();
?>
<!DOCTYPE html>
<html>
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
<body>
<h1> Welcome to Dream Weaver </h1>
<h2>Packages Are Shown Below</h2>
<h3>Super Saver 1 (Single event)</h3>
<p>Cost : 12500 BDT</p>
<p>Photographer : 1 SeniorPhotographer (Event Duration)</p>
<p>Event Duration: 4 Hours+</p>
<p>Number of Pictures:Unlimited (All post processed)</p>
<p>Specially EditedPhotos: 100 copies</p>
<p>Print: 4R (4”x6")matte prints: 100 copies</p>
<p>* All soft copy of photos will be delivered on DVD s.</p>

<h3>Super Saver 2(Single event)</h3>
<p>Cost:20000 BDT</p>
<p>Photographer:One Senior photographer(4 Hours) with one assistant photographer(Event Duration)</p>
<p>Event Duration: 4 Hours+</p>
<p>*Senior Photographer'ssession is 4 hours and he will cover all </p>
<p>the portraits, couples, conceptuals,abstracts and also</p>
<p>important family memories</p>
<p>Number of Photos:Unlimited (All post processed)</p>
<p>Specially Edited Photos:100 copies</p>
<p>Print: 5L (5”x7.5")matte prints: 100 copies</p>
<p>12L (12”x18") MATTE print: 1copies</p>
<p>All soft copyof photos will be delivered on DVDs.</p>


<h3>STANDARD 1 (Single event)</h3>
<p>Cost:27500 BDT</p>
<p>Photographer : Chiefphotographer J.H. Shuvo with one Top Associate photographer.</p>
<p>Duration: 4 Hours+</p>
<p>*45 minutes exclusive session for Bride and 
<p>Groom with conceptual photographs and exclusive<p>
<p>photo work at the event with their familyby our</p>
<p>Chief photographer J.H. Shuvo.</p>
<p>Number of Pictures: Unlimited(All post processed)</p>
<p>Specially Edited Photo:150 copies</p>
<p>Print :16L (12”x18")MATTE print: 1 copy
5L (5”x7.5") MATTEprints: 125 copies</p>
<p>All soft copy of photoswill be delivered on DVD s.</p>


<h3>STANDARD 2(Single event)</h3>
<p>Cost:32500 BDT</p>
<p>Photographer:Chiefphotographer J.H. Shuvo with one Top Associate photographer.</p>
<p>Duration:4Hours+</p>
<p>*45 minutes exclusive session for Bride and </p>
<p>Groom with conceptual photographs and exclusive<p>
<p>photo work at the event with their familyby our</p>
<p>Chief photographer J.H. Shuvo.</p>
<p>Number of Pictures: Unlimited(All post processed)</p>
<p>Specially Edited Photo:150 copies</p>
<p>Print :16L (12”x18")MATTE print: 1 copy
5L (5”x7.5") MATTEprints: 125 copies</p>
<p>All soft copy of photoswill be delivered on DVD s.</p>

<h3>STANDARD 3(Single event)</h3>
<p>Cost:40000 BDT</p>
<p>Photographer:Chiefphotographer J.H. Shuvo with one Top Associate photographer.</p>
<p>Duration:4Hours+</p>
<p>1hour *15 minutes exclusive session for Bride and </p>
<p>Groom with conceptual photographs and exclusive<p>
<p>photo work at the event with their familyby our</p>
<p>Chief photographer J.H. Shuvo.</p>
<p>Number of Pictures: Unlimited(All post processed)</p>
<p>Specially Edited Photo:150 copies</p>
<p>Print :16L (12”x18")MATTE print: 1 copy
5L (5”x7.5") MATTEprints: 125 copies</p>
<p>All soft copy of photoswill be delivered on DVD s.</p>

<h3>EXCLUSIVE 1(Single event)</h3>
<p>Cost : 55000 BDT</p>
<p>Photographer : Chief photographer J.H. Shuvo</p>
<p>with one Top Photographer and One Associate photographer.</p>
<p>Duration : 5 Hours</p>
<p>*2 hours and 15mins exclusive session for</p>
<p>Bride and Groom with conceptual photographs</p> 
<p>and exclusive Photo work at the</p>
<p>event with their family by our</p> 
<p>Chief photographer J.H. SHUVO.</p>
<p>*1 hour Pre/Post wedding photo-shoot.</p>
<p>Number of Photos:Unlimited(All post processed)</p>
<p>Specially Edited Photo: 200 copies</p>
<p>Lighting System:2 units ExternalLighting system</p>
<p>which is very Useful fortaking outstanding Family</p> 
<p>Photos on the stage( External wireless flash units)</p>
<p>Bashor Ghor : 30 Mins by Top Associate Photographer</p> 
<p>(If Transport Providedand If session end by 1AM)</p>
<p>Print:</p>
<p>20L (20”x30")MEGA poster size print:2 copies.</p>
<p>12L (12”x18")MATTE print:3 copies</p>
<p>5L (5”x7.5")MATTE print:150 copies</p>
<p>*All soft copy of photos will be delivered on DVD.</p>

<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$query="Select id from company where Username='dream_w'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
	$_SESSION['idget']=$row['id'];
}
                          
						   //echo '<p><a href="homepage.html">Click Here to LOG in</a></p>';
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