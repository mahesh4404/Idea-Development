<?php
require_once("conn.php");
session_start();
$investor_name=$_SESSION['iname'];
$student_name=$_SESSION['ppp'];
//echo $investor_name;
//echo $student_name;
$sql="INSERT INTO `investornotify` (`no`, `investorname`, `studentname`) VALUES (NULL, '$investor_name', '$student_name')";

if($conn->query($sql)==true)
{
 echo"You just notified him and please contact him with an email";
 echo "<br></br>";
 echo"Thankyou ";

}
else
{
 echo"sorry bro lost again";
}
?>
