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


$name=$_POST["Name"];
$email=$_POST["EMail"];
// $mobile_no=$_POST["Telephone"];
$password=$_POST["Password"];
$identity=$_POST["Subject"];
echo"<p> $name $email $password $identity </p>";

 $_SESSION['email']=$email;
  
  if($identity=="Student"){

$sql="insert into jiit_student values('$name','$email','$password',NULL)";

$c=mysql_query($sql,$conn);

// if(!$c)
// {
// die("failed".mysql_error());
// }


echo "Successfully inserted  into a table<br><br>";

echo '<a href="pro.php">a</a>';
mysql_close($conn);
header("location:studentportal.php");

  }


	
  else{

$sql="insert into landlord values('$name','$email','$password')";

$c=mysql_query($sql,$conn);

if(!$c)
{
die("failed".mysql_error());
}


echo "Successfully inserted  into a table<br><br>";

header("location:landlordportal.php");

mysql_close($conn);

  }
  

 ?>