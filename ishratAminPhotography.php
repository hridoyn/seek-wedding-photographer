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
<h1>Welcome To Ishrat Amin Photography</h1>
<h2>Packages Are Shown Below</h2>
<h3>ECONOMY PACKAGE 1</h3>
<p>BDT 25,500 [Per Event]</p>
<p>Photographer: Chief Photographer </p>
Ishrat Amin with 1 Associate Photographer.</p>
<p>Number of Photographers: 2</p>
<p>Duration: 7.00pm to 11.00pm</p>
<p>Number of Edited Photos: Unlimited.</p>
<p>Number of exclusively edited Portraits by Ishrat Amin: 80 [Per Event]</p>
<p>Group Photos will have adjustment Editing.</p>
<p>Prints:</p>
<p>4R 100 Copies</p>
<p>10L 2 Copies</p>
<p>Features:</p>
<p>1 hour Exclusive Portrait Session with the bride & groom by our Chief </p>
<p>photographer Ishrat Amin.</p>
<p>Decoration & Group photos on the stage will be covered too.</p>

<h3>ECONOMY PACKAGE 2</h3>
<p>BDT 34,500 [Per Event]</p>
<p>Photographer: Chief Photographer Ishrat Amin with 2 Associate Photographers.</p>
<p>Number of Photographers: 3</p>
<p>Duration: 7.00pm to 12.00am</p>
<p>Number of Photos: Unlimited.</p>
<p>Number of exclusively edited Portraits: 100 [Per Event]</p>
<p>Group Photos will have adjustment Editing.</p>
<p>Prints:</p>
<p>5L 100 Copies</p>
<p>10L 2 Copies</p>
<p>12L 2 Copies</p>
<p>Features:</p>
<p>2 hours exclusive Portrait Session </p>
<p>with the bride-groom and their family</p>
<p>members by our Chief photographer Ishrat Amin.</p>
<p>Decoration, Group photos and Important Guest </p>
<p>Portraits on the stage will be covered too.</p>

<h3>ECONOMY PACKAGE 3</h3>
<p>BDT 39,500 [Per Event]</p>
<p>Photographer: Chief Photographer Ishrat Amin</p>
<p>with 2 Associate Photographers.</p>
<p>Number of Photographers: 3</p>
<p>Duration: 7.00pm to 12.00am</p>
<p>1 hour Pre/Post Wedding shoot by 1 of our senior photographers.</p>
<p>Number of Edited Photos: Unlimited.</p>
<p>Number of exclusively Edited Photos by Ishrat Amin: 150 [Per Event]</p>
<p>Prints:</p>
<p>5L 150 Copies</p>
<p>8L 2 Copies</p>
<p>10L 2 Copies</p>
<p>12L 2 Copies</p>
<p>Features:</p>
<p>3 hours exclusive Portrait Session with the bride-groom and their</p> 
<p>family members by our Chief photographer Ishrat Amin</p>
<p>Exclusive and Conceptual Portrait Session with the bride-groom</p>
<p>and their family members will be covered by our Chief photographer Ishrat Amin.</p>
<p>Photo Album</p>


<h3>EXCLUSIVE PACKAGE</h3>
<p>BDT 49,500 [Per Event]5% discount if booked for more than 1 EVENT*valid till NOVEMBER 2015</p>
<p>Photographer: Chief Photographer Ishrat Amin with 3 Associate Photographers.</p>
<p>Number of Photographers: 3</p>
<p>Duration: 7.00pm to 12.00am</p>
<p>1 hour Pre/Post Wedding shoot by 1 of our senior photographers.</p>
<p>30 minutes bashor shoot if the shoot ends by 1.am and transport is provided.</p>
<p>Number of Edited Photos: Unlimited.</p>
<p>Number of exclusively Edited Photos by Ishrat Amin: 150 [Per Event]</p>
<p>Prints:</p>
<p>5L 150 Copies</p>
<p>8L 2 Copies</p>
<p>10L 2 Copies</p>
<p>12L 2 Copies</p>
<p>Features:</p>
<p>3 hours exclusive Portrait Session with the bride-groom and their family</p>
<p> members by our Chief photographer Ishrat Amin.</p>
<p>Exclusive and Conceptual Portrait Session with the bride-groom and </p>
<p>their family members will be covered by our Chief photographer Ishrat Amin.</p>
<p>Photo Album</p>
<p>Pre/Post Wedding Shoot</p>
<p>Bashor Shoot</p>

<h3>Premium Package</h3>
<p>Starting From BDT 69,000 [Per Event] 10% discount if booked for more</p>
<p>than 1 EVENT*valid till NOVEMBER 2015</p>
<p>Photographer: Chief Photographer Ishrat Amin with 4 Senior Photographers.</p>
<p>Number of Photographers: 5</p>
<p>Duration: As long as the event Continues.*</p>
<p>Number of Photos: Unlimited.</p>
<p>Number of exclusively edited Portraits: 200 [Per Event]</p>
<p>Free Bashor Shoot: 1 hour shoot by one of our Senior Photographers.</p>
<p>Free Pre/Post Wedding Shoot: 1.5 hours shoot by our Chief Photographer Ishrat Amin.</p>
<p>Free Story Book</p>
<p>Prints:</p>
<p>20L (20”x30″) MEGA poster size MATTE print : 3 Copies with Photo Frame</p>
<p>12L (12”x18″) MATTE print : 5 Copies with Photo Frame</p>
<p>5L (5”x7.5″) MATTE print : 200 copies</p>
<p>Large Story Book</p>
<p>Features:</p>
<p>Ishrat Amin will be there as long as the event Continues.*</p>
<p>Exclusive and Conceptual Portrait Session with the bride-groom and</p>
<p>their family members will be covered by our Chief photographer Ishrat Amin.</p>
<p>Free Pre/Post Wedding Shoot</p>
<p>Free Bashor Shoot (1 Hour)</p>
<p>Free Story Book</p>
<p>Photo Frame</p>

<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'hridoy'))
{
	echo 'database is not selected';
	
}
$query="Select id from company where Username='iap220'";
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
