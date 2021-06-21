<?php
require_once "conn.php";
$name=$_POST["sname"];
$pass=$_POST["spassl"];
$sql="SELECT * FROM studentdetails WHERE name='$name' AND password='$pass' LIMIT 1";
//$sql2="SELECT * FROM studentdetails WHERE email='$email'";
session_start();  
$result=$conn->query($sql);
if($result->num_rows>0)
{	
     $_SESSION['diss']=$name;
     $_SESSION['dis']=$pass;
	 header("Location: shome.php"); 
	//echo "came in";
	//$result2=$conn->query($sql2);
	//$result3=$result->fetch_assoc();
    //echo $result3["name"];
}
else
{
	echo "again gone bro!!";
}



?>