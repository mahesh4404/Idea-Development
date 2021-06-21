
<!Doctype html>
<html>
<head>
<title> list of ideas  </title>
<!--<link rel="stylesheet" type="text/css" href="ihcss.css">-->
<link rel="stylesheet" href="ihomecss.css">
</head>
	
	
	
<body style="background: url(ooo.jpg)">
<div id="navbar">
<ul>
<li><a href=" ">&nbsp HOME &nbsp</a></li>
<li><a href=" iprofilefield.php">&nbsp MY PROFILE &nbsp</a></li>
<!--  <li><a href="">&nbsp NOTIFICATIONS &nbsp</a></li> -->
<li><a href="homefield.php">&nbsp LOGOUT &nbsp</a></li>
</ul>
</div>


<div id="navbarr">
<ul>
<li>
 <?php
 session_start();
 ?>
 <h3><?php 
 echo"welcome \n Mr \n. \n ".$_SESSION['iname']; ?> </h3>
 
</li>
</ul>
</div>

 <br>
 </br>
 <br>
 </br>

<?php
require_once "conn.php";

$sql="SELECT no, name, idea from studentideas";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		?>
		<div id="one">
        <?php
        /* echo $row["name"];*/	
         ?>
         <a href="connect.php?name=<?php echo $row["name"]?>"> <?php echo $row["name"]; ?> </a>
		</div>

		
		<div id="two">
        <?php
         echo $row["idea"];	
         ?>		 
		</div>
		<br></br>

		
		<?php
	}
}
else
{
	echo"0 results found";
}
?>
</table>
</body>
</html>
		