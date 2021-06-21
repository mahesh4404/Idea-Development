<!Doctype html>
<html>
<head>
<title> Student's Profile</title>
<link rel="stylesheet" href="sprofilecss.css">
</head>

<body style="background: url(ooo.jpg)">
<?php
require_once("conn.php");
session_start();
$student=$_SESSION['diss'];
$password=$_SESSION['dis'];

$sql="SELECT * from studentdetails where name='$student' and password='$password'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{

	while($row=$result->fetch_assoc())
	{
	?>

	   <div id="mainbox">

	   	    <br>
    </br>


         <div class="box">
		 <?php
		 echo"Name\n\n\n\n\n\n:\n\n\n\n\n\n" .$row["name"];
         ?>
         </div>

        <br>
    </br>

         <div class="box">
         <?php
         echo "E-mail \n\n\n\n\n:\n\n\n\n\n".$row["email"];
         ?>
         </div>

         <br>
    </br>

         <div class="box">
         <?php
         echo"Mobile Number \n\n\n\n\n:\n\n\n\n\n". $row["number"];
         ?>
         </div>

         <br>
    </br>

         <div class="box">
         <?php
         echo"College \n\n\n\n\n:\n\n\n\n\n". $row["college"];
         ?>
         </div>
     </div>
         <?php
	}
}
else
{
	echo"0 results found";
}
?>
 <h1 id="youridea">Your idea </h1>
 <br></br>
<textarea id="viewidea"rows="5" cols="120" wrap="virtual" name="ideatext">
<?php

$sql="SELECT idea from studentideas where name='$student'";
$result2=$conn->query($sql);

if($result2->num_rows > 0)
{

	while($row2=$result2->fetch_assoc())
	{

	echo $row2["idea"];
	}
}
else
{
	echo"0 results found";
}
?>


</textarea>

</body></html>
