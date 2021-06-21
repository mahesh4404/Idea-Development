
<html>
<head>
<title> investors Profile</title>
<link rel="stylesheet" href="sprofilecss.css">
</head>

<body style="background: url(ooo.jpg)">
<?php
require_once("conn.php");
session_start();
$investor=$_SESSION['iname'];

$sql="SELECT * from investor where name='$investor' ";
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
         echo"Company \n\n\n\n\n:\n\n\n\n\n". $row["company"];
         ?>
         </div>
         <br></br>

     </div>
         <?php
    }
}
else
{
    echo"0 results found";
}
?>
</textarea>
</body>
</html>
