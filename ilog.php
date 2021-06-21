<?php
require_once "conn.php";
$name=$_POST["iname"];
$pass=$_POST["ipassl"];
$sql="SELECT * FROM investor WHERE name='$name' AND password='$pass' LIMIT 1";

session_start();  
$result=$conn->query($sql);
if($result->num_rows>0)
{	
     $_SESSION['iname']=$name;
	 header("Location: ihome.php"); 
	//$result2=$conn->query($sql2);
	//$result3=$result->fetch_assoc();
    //echo $result3["name"];
}
else
{
	echo "again gone bro!!";
}



?>