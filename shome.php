<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="shomecss.css">
<title>Student</title>
</head>
<body   style="background: url(ooo.jpg)">
<div id="navbar">
<ul>
<li><a href="shome.php ">&nbsp HOME &nbsp</a></li>
<li><a href="sprofilefield.php">&nbsp MY PROFILE &nbsp</a></li>
<li><a href="studentnotify.php">&nbsp NOTIFICATIONS &nbsp</a></li>
<li><a href="homefield.php">&nbsp LOGOUT &nbsp</a></li>
</ul>
</div>

<div id="navbarr">
<ul>
<li>


 <?php
 session_start();
 echo" Welcome MR ." .$_SESSION['diss'];
 ?>
</li>
</ul>
</div>
<div id="enteryouridea"><h1>Enter your ideas </h1>
<form action="ideainput.php" method="post">
<textarea id="abc"rows="15" cols="120" wrap="virtual" name="ideatext"></textarea>
<br><br>
<button type="submit" id="id-submit-btn">Submit</button>
</form>
</body>
</html>
