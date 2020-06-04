<?php 

require "connect.php";

$collg = $_POST["collegename"];
$name = $_POST["name"]; 
$mob = $_POST["mobile"] ;
$age = $_POST["age"];
$gender=$_POST['gender'];
$email= $_POST["email"];

$sql = "insert into pass_distribution values('$collg', '$name', '$mob', '$age', '$gender', '$email')";

if(mysqli_query($con, $sql))
{
	echo "Entry successful";
}
else
{
	echo "Error: Already registered";
}


?>