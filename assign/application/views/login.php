<?php

include "config.php";
$name = $_GET["name"];
$db = dbConnect();

 ?>
 <html>
 <head>
		
 
 </head>
 <body>
	<center><h2> LOGIN </h2></center>
	<form action="..\editForm.php" method="POST">
		<center>
			<table cellpadding="10px">
		
				<tr>
					<td><label> NAME:</label> </td>
					<td><input type="text" value="<?php echo $name ?>" name="name" id="name" /></td>
				</tr>
				<tr>
					<td><label> PASSWORD:</label></td>
					<td><input type="password" value="" name="pwd" id="pwd" /></td>
				</tr>
				<tr></tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="SUBMIT" /></td>
				</tr>
			</table>
		</center>
	</form>
 </body>
 </html>
 
 