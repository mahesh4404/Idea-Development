<?php
require_once "conn.php";
$name = $_POST["sname"];
$email = $_POST["semail"];
$number=$_POST["snumber"];
$college = $_POST["scollege"];
$password = $_POST["spassword"];

$sql="INSERT INTO `studentdetails`(`name`, `email`,`number`,`college`, `password`) VALUES ('$name', '$email', '$number', '$college', '$password')";

if($conn->query($sql)==true)
{
echo"You regestration was successful please login";
}
else
{
	echo"sorry your regestration failed";
}
?>
