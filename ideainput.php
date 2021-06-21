<?php
session_start();
require_once "conn.php";
$idea=$_POST["ideatext"];
$name=$_SESSION['diss'];

 $sql="INSERT INTO `studentideas` (`no`, `name`, `idea`) VALUES (NULL, '$name', '$idea')";

if($conn->query($sql)==true)
{
	echo"You idea posted successfully";
}
else
{
	echo"there is some error please come again";
}
?>
