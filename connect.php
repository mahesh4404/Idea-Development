<!Doctype html>
<html>
<head>
<title> view student profile</title>
<link rel="stylesheet" href="sprofilecss.css">
</head>

<body style="background: url(ooo.jpg)">

<?php
require_once "conn.php";
$id=$_GET["name"];

$sql="SELECT * from studentdetails where name='$id' ";
$result=$conn->query($sql);
if($result->num_rows > 0)
{

    while($row=$result->fetch_assoc())
    {
    ?>

       <div id="mainbox">

            <br></br>

         <div class="box">
         <?php
         echo"Name\n\n\n\n\n\n:\n\n\n\n\n\n" .$row["name"];
         session_start();
         $_SESSION['ppp']=$row["name"];

         ?>
         </div>

        <br></br>

         <div class="box">
         <?php
         echo "E-mail \n\n\n\n\n:\n\n\n\n\n".$row["email"];
         ?>
         </div>

             <br></br>

        <div class="box">
         <?php
         echo "number \n\n\n\n\n:\n\n\n\n\n".$row["number"];
         ?>
         </div>

         <br></br>
         <div class="box">
         <?php
         echo"College \n\n\n\n\n:\n\n\n\n\n". $row["college"];
        ?>

         </div>
       <br></br>

         <a id="notify" href="inotify.php">&nbsp notify him &nbsp</a>


         <br></br>



     </div>
         <?php
    }
	}

else
{
	echo"nooooo";
}
?>
</body>
</html>
