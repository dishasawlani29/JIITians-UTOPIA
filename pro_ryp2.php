<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";



$sql=mysql_select_db('PROJECT',$conn);

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";



$locality=$_POST["loc"];
$rent=$_POST["rent"];
$address=$_POST["address"];
echo"<p> $locality $rent $address </p>";
$primary=$_SESSION['email'];
$image=$_POST['image'];
echo"<p> $primary </p>";
echo"<p> $image </p>";
$sql="insert into ROOMS(L_EMAIL,LOCATION,RENT,ADDRESS,IMAGE,RENTED_TO)"."values('$primary','$locality','$rent','$address','$image',NULL)";

$c=mysql_query($sql,$conn);

if(!$c)
{
	die("failed".mysql_error());
}

echo "Successfully inserted  into a table<br><br>";

header('location: landlordportal.php');
mysql_close($conn);

?>
