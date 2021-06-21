<?php
$server="localhost";
$user="root";
$password="";
$dbase="deatails";

$conn=new mysqli($server,$user,$password,$dbase);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}
//echo"connected  successfully";
?>