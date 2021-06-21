<!Doctype html>
<html>
<head>
<title> notifications  </title>
<link rel="stylesheet" type="text/css" href="studentnotifycss.css">
</head>

<body>
<?php
require_once("conn.php");
session_start();
$name=$_SESSION['diss'];
$sql="SELECT * from investornotify where studentname='$name' ";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
      ?>
      <div id="dabba">
        <?php
      echo "Investor ".$row['investorname'] ." &nbsp is intrested in your idea so please wait for his email";
      ?>
    </div>
    <?php
    echo "<br></br>";
    ?>
    <?php
    }
}
else {
  echo"you have no new notifications";
}

?>
</body>
</html>
