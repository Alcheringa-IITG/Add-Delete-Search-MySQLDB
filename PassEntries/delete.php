<?php 

require "connect.php";

$del = $_POST["collegename"];

$sql = "delete from pass_distribution where College_Name='$del'";

if(mysqli_query($con, $sql))
{
	echo "Deleted";
}
else
{
	echo "Error: Failed";
}


?>