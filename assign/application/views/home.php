<html>
	<head>
		<title> VENDORS </title>
	
	</head>
	
	<body>
		<center>
		<h1 style="color:#0000FF">WELCOME</h1>
		<h2 style="color:#678908">CURRENT VENDORS LIST</h2>
		<button type="button"><a href="http://localhost/assign/index.php/welcome/addvendor">ADD VENDOR</a></button></br></br> 
	
		<?php echo $this->table->generate($results); ?>

		</center>
	
	</body>
</html> 
