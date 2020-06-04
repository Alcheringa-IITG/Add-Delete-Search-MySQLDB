<?php 
$username = "root"; 
$password = ""; 
$host = "localhost"; 
$dbname = "entry_register";

$sql="select * from pass_distribution;";

$con= mysqli_connect($host, $username, $password, $dbname);

$result= mysqli_query($con, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

$response= array();

while($row=mysqli_fetch_array($result))
{
	array_push($response, array("College Name"=>$row[0], "Name"=>$row[1], "Mobile Number"=>$row[2], "Age"=>$row[3], "Gender"=>$row[4], "Email"=>$row[5]));
}

echo json_encode(array("server_response"=>$response));

mysqli_close($con);

?>