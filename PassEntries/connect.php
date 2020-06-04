<?php 
$username = "root"; 
$password = ""; 
$host = "localhost"; 
$dbname = "entry_register";

$con= mysqli_connect($host, $username, $password, $dbname);

if(!$con)
{
	die("Error in connection". mysqli_connect_error());
}

else
{
	//echo "<br><h3>Connection Success....</h3>";

}

?>