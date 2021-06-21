
<!Doctype html>
<head>
<title>investor</title>
<link rel="stylesheet" href="iloginfieldcss.css">
</head>
<body>
<div id="slback">
    <div id="slformbox"> 
	 <div class="button-box"> 
	 <div id=btnc></div>
	 <button type="button" class="toggle"onclick="slloginfu()">Login</button>
	<button type="button" class="toggle"onclick="slregisterfu()">Register</button>
	</div>

	<form id="slloginform"class="slinput" action="ilog.php" method="post">
	<input type="text" class="slinput-field" name="iname" placeholder="User Name" required>
	<input type="password" class="slinput-field" name="ipassl" placeholder="Password" required>	
	<input type="checkbox" class="slcheckbox"><span>Remember Password</span>
	<button type="submit" class="slsubmit-btn">Login</button>
	</form>
	
	<form id="slregisterform"class="slinput" action="ireg.php" method="post">
	<input type="text" class="slinput-field" name="iname" placeholder="User Name" required>
	<input type="text" class="slinput-field" name="iemail" placeholder="E-mail" required>
    <input type="text" class="slinput-field" name="icompany" placeholder="Company" required>
	<input type="password" class="slinput-field" name="ipassword" placeholder="Password" required>	
	<input type="checkbox" class="slcheckbox"><span>Agree terms and conditions</span>
	<button type="submit" class="slsubmit-btn">Register</button>
	</form>
	</div>
	</div>


	<script>
	var x=document.getElementById("slloginform");
	var y=document.getElementById("slregisterform");	
    var z=document.getElementById("btnc");
	
	function slregisterfu(){
	x.style.left="-450px";
	y.style.left="30px";
	z.style.left="110px";
	}
	
	function slloginfu(){
	x.style.left="30px";
	y.style.left="400px";
	z.style.left="0";
	}
	
	</script>
</body>
</html>
