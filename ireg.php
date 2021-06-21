<?php
require_once "conn.php";
$name = $_POST["iname"];
$email = $_POST["iemail"];
$company = $_POST["icompany"];
$password = $_POST["ipassword"];

$sql="INSERT INTO `investor` ( `no`,`name`, `email`, `company`, `password`)
                 VALUES (NULL,'$name', '$email', '$company', '$password')";
if($conn->query($sql)==true)
{
	echo"You regestration was successful please login";
}
else
{
	echo"sorry your regestration failed ";
}
?>
